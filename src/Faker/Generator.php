<?php

class Generator
{
    protected $providers = array();
    protected $formatters = array();

    public function addProvider($provider)
    {
        array_unshift($this->providers, $provider);
    }

    public function getProviders()
    {
        return $this->providers;
    }


    public function format($formatter, $arguments = array())
    {
        return call_user_func_array($this->getFormatter($formatter), $arguments);
    }

    public function getFormatter($formatter)
    {
        if (isset($this->formatters[$formatter])) {
            //hàm isset ở đây để kiểm tra xem $this->formatters[$formatter]) có tồn tại hay không
            return $this->formatters[$formatter];
            //nếu có thì return $this->>formatter
        }
        foreach ($this->providers as $provider) {
            //coi từng $provider là 1 phan tử của mảng providers[]
            if (method_exists($provider, $formatter)) {
                //method_exists trả về TRUE nếu tên của hàm đã được định nghĩa từ Objecct còn không thì trả FALSE
                $this->formatters[$formatter] = array($provider, $formatter);
                
                return $this->formatters[$formatter];
            }
        }
        throw new \InvalidArgumentException(sprintf('Unknown formatter "%s"', $formatter));
    }

    /**
     * Replaces tokens ('{{ tokenName }}') with the result from the token method call
     *
     * @param string $string String that needs to bet parsed
     * @return string
     */
    public function parse($string)
    {
        return preg_replace_callback('/\{\{\s?(\w+)\s?\}\}/u', array($this, 'callFormatWithMatches'), $string);
    }
    // dùng preg_match để tách các properties trong array mà mình đã khai báo
    //ví dụ: tách array ('{titleMale}') -> titleMale gán vào mảng
    protected function callFormatWithMatches($matches)
    {
        return $this->format($matches[1]);
    }
    // trả về mảng fomat nhưng ở key vì matches[1]  <=>attributes



    public function __get($attribute)
    {
        return $this->format($attribute);
    }

    public function __call($method, $attributes)
    {
        return $this->format($method, $attributes);
    }

}
