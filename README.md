# Faker


Faker là một thư viện được sử dụng trong PHP- cái mà chúng ta sử dụng để khởi tạo ra dữ liệu ảo. Bạn có thể tạo dữ liệu trực tiếp thông qua database console hay GUI hoặc một đoạn mã script php nào đó, có thể đáp ứng nhu cầu của bạn nhưng dữ liệu được tao ra lúc này có thể không giống thực tế lắm. Với thư viện Faker bạn có  tạo ra dữ liệu giả nhưng không khác gì dữ liệu thật

# Các nội dung chính
- [Cài Đặt](#1)
- [Output](#export)
    - [Name](#1)


## Cài Đặt
Chúng ta có nhiều cách cài đặt nó, bạn có thể tải nó về song sau đó copy vào thư mục project của bạn, nhưng tôi khuyên bạn nên dùng composer cho công việc này, để cài đặt nó bạn chỉ cần chạy lệnh này trong project của bạn:
   
    composer require : nguyenthang011099/faker-viet-nam

** chú ý: Faker yêu cầu PHP bản 5.3 trở lên
## Cách sử dụng
Do chúng ta cài Faker thông qua commposer nên để sử dụng nó bạn chỉ cần nạp tập tin autoload trong thư mục mà bạn muốn dùng 

    require_once "vendor/autoload.php";


## Sử dụng cơ bản
Mọi thứ cấu hình coi như đã xong, việc kế tiếp là bạn khởi tạo một class của nó, chúng ta hãy xem xét ví dụ dưới đây:

    use Faker\Fake;

 
 
### Create Fake Class (Example)

    $faker = Faker\Factory::create();
     //khoi tao đối tượng faker
    echo $faker->name;
    // Nguyễn Minh Nam


Nếu ví dụ này thể hiện các thuộc tính, chúng ta có thể gọi từng thuộc tính để in ra các kết quả khác nhau bởi vì các thuộc tính như name, address, phone được định nghĩa ngay trong class Fake, trong đó có các hàm __contruct() để khởi tạo và hàm  __get() để trả về các giá trị

    <?php
    for ($i = 0; $i < 5; $i++) {
    echo $faker->name, "\n";
    }
    //Lê Văn Toàn
    // Nguyễn Gia Long
    //Phạm Thị Phương
    //Lương Văn Thập
    //Đặng Thị Oanh


Cụ thể Faker này  cung cấp rất chi tiết, ở đây, nó cung cấp rất nhiều định dạng
Ví dụ:

    titleMale                                 // 'Ông'
    titleFemale                               // 'Bà'
    firstNameMale                             // 'Trung'
    lasttName                                 // 'Nguyễn'
    middleNameMale or middleName('Male')      // 'Thi'
    nameFemale                                // 'Phạm Thị Trang'
    name('Male') or name('male')              //  'Nguyễn CHung Hiếu'
    name('Female') or name('female')          // 'Lê Văn An'
    
### Web html    
    use Faker\Fake;
    $fake=new Fake();
    ?>
    <?php for ($i=0; $i < 10; $i++): ?>
        <h1><?php echo $fake->name  ;?></h1>
        <hr>

    <?php endfor; ?>
     

# Result
![](image/web.png)
