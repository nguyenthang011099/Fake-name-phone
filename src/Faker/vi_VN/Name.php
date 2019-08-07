<?php
namespace Faker\vi_VN;
class Name{

    protected static $titleMale = array('Ông', 'Chú ', 'Bác');
    protected static $titleFemale = array('Bà ', 'Cô ', 'Dì ', 'Mợ ', 'Thím');
    public $firstName = array(
        'An', 'Anh',
        'Bào', 'Bình', 'Bạch', 'Bảo', 'Bắc', 'Bằng', 'Bổng', 'Bửu',
        'Ca', 'Canh', 'Chiến', 'Chiểu', 'Châu', 'Chính', 'Chương', 'Chưởng', 'Chấn', 'Công', 'Cơ', 'Cương', 'Cường', 'Cảnh', 'Cần', 'Cẩn',
        'Danh', 'Di', 'Dinh', 'Diệp', 'Diệu', 'Du', 'Duy', 'Duệ', 'Dân', 'Dũng', 'Dương', 'Dụng',
        'Giang', 'Giác', 'Giáp',
        'Hiên', 'Hiếu', 'Hiền', 'Hiển', 'Hiệp', 'Hoa', 'Hoài', 'Hoàn', 'Hoàng', 'Hoán', 'Huy', 'Huynh', 'Huấn', 'Huỳnh', 'Hà', 'Hành', 'Hào', 'Hòa', 'Hùng', 'Hưng', 'Hạnh', 'Hải', 'Hảo', 'Hậu', 'Học', 'Hồng', 'Hội', 'Hợp', 'Hữu', 'Hỷ',
        'Kha', 'Khang', 'Khanh', 'Khiêm', 'Khiếu', 'Khoa', 'Khoát', 'Khánh', 'Khôi', 'Khương', 'Khải', 'Kim', 'Kiên', 'Kiếm', 'Kiện', 'Kiệt', 'Kính', 'Kỳ', 'Kỷ',
        'Lai', 'Lam', 'Linh', 'Liêm', 'Long', 'Luận', 'Luật', 'Lâm', 'Lân', 'Lý', 'Lĩnh', 'Lương', 'Lạc', 'Lập', 'Lễ', 'Lộ', 'Lộc', 'Lực',
        'Minh', 'Mạnh', 'Mẫn', 'Mỹ',
        'Nam', 'Nghiêm', 'Nghiệp', 'Nghĩa', 'Nghị', 'Nguyên', 'Ngân', 'Ngôn', 'Ngạn', 'Ngọc', 'Nhiên', 'Nhu', 'Nhuận', 'Nhân', 'Nhã', 'Nhượng', 'Nhạn', 'Nhật', 'Ninh',
        'Phi', 'Phong', 'Pháp', 'Phát', 'Phú', 'Phúc', 'Phương', 'Phước', 'Phụng',
        'Quang', 'Quyết', 'Quyền', 'Quân', 'Quý', 'Quảng', 'Quế', 'Quốc', 'Quỳnh',
         'Sỹ',
        'Thanh', 'Thiên', 'Thiện', 'Thuận', 'Thành', 'Thái', 'Thông', 'Thúc', 'Thạc', 'Thạch', 'Thắng', 'Thể', 'Thịnh', 'Thọ',
        'Thống', 'Thời', 'Thụy', 'Thủy', 'Thực', 'Tiến', 'Tiếp', 'Tiền', 'Tiển', 'Toàn', 'Toại', 'Toản', 'Trang', 'Triết',
        'Triều', 'Triệu', 'Trung', 'Trác', 'Tráng', 'Trân', 'Trình', 'Trí', 'Trúc', 'Trường', 'Trưởng', 'Trạch', 'Trọng',
        'Trụ', 'Trực', 'Tuyền', 'Tuấn', 'Tuệ', 'Tài', 'Tâm', 'Tân', 'Tín', 'Tùng', 'Tú', 'Tường', 'Tấn', 'Tụ', 'Từ',
        'Uy',
        'Vinh', 'Viên', 'Việt', 'Vu', 'Võ', 'Văn', 'Vĩ', 'Vĩnh', 'Vũ', 'Vương', 'Vượng', 'Vịnh', 'Vỹ',
        'Xuân',
        'Yên',
        'Án', 'Ân',
        'Đan', 'Điền', 'Điệp', 'Đoàn', 'Đình', 'Đôn', 'Đăng', 'Đại', 'Đạo', 'Đạt', 'Định', 'Đồng', 'Độ', 'Đức', 'Đức',
        'Ẩn',
    );
    public $lastName = array(

        'Nguyen ', 'Bá',  'Bình', 'Bùi', 'Bạc', 'Bạch', 'Bảo', 'Bế', 'Bồ', 'Bửu',
        'Ca', 'Cam', 'Cao', 'Chiêm', 'Chu', 'Chung', 'Châu', 'Chương', 'Chế', 'Chử', 'Cung', 'Cái', 'Cát', 'Cù', 'Cấn', 'Cầm', 'Cổ', 'Cự',
        'Danh', 'Diêm', 'Diệp', 'Doãn', 'Dã', 'Dư', 'Dương',
        'Đan', 'Đàm', 'Đào', 'Đái', 'Đặng', 'Đậu', 'Đinh', 'Điền', 'Đoàn', 'Đôn', 'Đồng', 'Đổng', 'Đỗ', 'Đới', 'Đường',
        'Giang', 'Giao', 'Giáp', 'Giả',
        'Hoa', 'Hoàng', 'Huỳnh', 'Hạ', 'Hồ', 'Hồng', 'Hứa',
        'Kha', 'Khoa', 'Khu', 'Khuất', 'Khâu', 'Khúc', 'Khưu', 'Khương', 'Khổng', 'Kim', 'Kiều',
        'La', 'Liễu', 'Lâm', 'Lã', 'Lê', 'Lò', 'Lô', 'Lý', 'Lư', 'Lưu', 'Lương', 'Lạc', 'Lại', 'Lều', 'Lỡ', 'Lục', 'Lữ', 'Lỳ',
        'Ma', 'Mai', 'Mang', 'Mâu', 'Mã', 'Mạc', 'Mạch', 'Mẫn', 'Mộc',
        'Nghiêm', 'Nghị', 'Nguyễn', 'Ngân', 'Ngô', 'Ngụy', 'Nhiệm', 'Nhâm', 'Nhậm', 'Nhữ', 'Ninh', 'Nông',
        'Ong',
        'Ông',
        'Phan', 'Phi', 'Phí', 'Phó', 'Phùng', 'Phương', 'Phạm',
        'Quách', 'Quản',
        'Sơn', 'Sử',
        'Thi', 'Thiều', 'Thào', 'Thái', 'Thân', 'Thôi', 'Thạch', 'Thập', 'Thịnh', 'Tiêu', 'Tiếp', 'Trang', 'Triệu', 'Trà',
        'Trác', 'Trình', 'Trưng', 'Trương', 'Trần', 'Trịnh', 'Ty', 'Tào', 'Tòng', 'Tô', 'Tôn', 'Tông', 'Tăng', 'Tạ', 'Tống', 'Từ',
        'Ung', 'Uông',
        'Vi', 'Viên', 'Võ', 'Văn', 'Vũ', 'Vương', 'Vừ', 'Xa',
        'Yên',
    );
    public $midNameMale=array(
        'Văn','Minh','Gia',"Trung","Huy","Chung ","Tiến","Nhật"
    );
    public $lastNameMale= array(
         'Bá',  'Bình', 'Bùi', 'Bạc', 'Bạch', 'Bảo', 'Bế', 'Bửu',
        'Ca', 'Cam', 'Cao', 'Chiêm', 'Chu', 'Chung', 'Châu', 'Chương', 'Chế', 'Chử', 'Cung', 'Cái', 'Cát', 'Cù', 'Cấn', 'Cầm', 'Cổ', 'Cự',
        'Danh', 'Diêm', 'Diệp', 'Doãn', 'Dã', 'Dư', 'Dương',
        'Đan', 'Đàm', 'Đào', 'Đặng', 'Đậu', 'Đinh', 'Điền', 'Đoàn', 'Đôn', 'Đồng', 'Đổng', 'Đỗ', 'Đới', 'Đường',
        'Giang', 'Giao', 'Giáp', 'Giả',
         'Hoàng', 'Huỳnh', 'Hạ', 'Hồ', 'Hồng', 'Hứa',
        'Kha', 'Khoa', 'Khu', 'Khuất', 'Khâu', 'Khúc', 'Khưu', 'Khương', 'Khổng', 'Kim', 'Kiều',
        'La', 'Liễu', 'Lâm', 'Lã', 'Lê', 'Lò', 'Lô', 'Lý', 'Lư', 'Lưu', 'Lương', 'Lạc', 'Lại', 'Lều', 'Lỡ', 'Lục', 'Lữ', 'Lỳ',
         'Mang', 'Mâu', 'Mã', 'Mạc', 'Mạnh',
        'Nghiêm', 'Nghị', 'Nguyễn', 'Ngân', 'Ngô', 'Ngụy', 'Nhiệm', 'Nhâm', 'Nhậm', 'Nhữ', 'Ninh', 'Nông',

        'Phan', 'Phó', 'Phùng',  'Phạm',
        'Quách', 'Quản',
        'Sơn', 'Sử',
        'Thi', 'Thiều', 'Thào', 'Thái', 'Thân', 'Thôi', 'Thạch', 'Thập', 'Thịnh', 'Tiêu', 'Tiếp', 'Trang', 'Triệu', 'Trà',
        'Trác', 'Trình', 'Trưng', 'Trương', 'Trần', 'Trịnh', 'Ty', 'Tào', 'Tòng', 'Tô', 'Tôn', 'Tông', 'Tăng', 'Tạ', 'Tống', 'Từ',
        'Ung', 'Uông',
        'Vi', 'Viên', 'Võ', 'Văn', 'Vũ', 'Vương',
        'Yên',
    );
    public $midNameFamale= array(
        'An', 'Anh',
        'Ban', 'Bích', 'Băng', 'Bạch', 'Bảo',
        'Cam', 'Chi', 'Chiêu', 'Cát', 'Cẩm',
        'Di', 'Diên', 'Diễm', 'Diệp',  'Duyên', 'Dã', 'Dạ',
        'Gia', 'Giang', 'Giao', 'Giáng',
        'Hiếu', 'Hiền', 'Hiểu', 'Hoa', 'Hoài', 'Hoàn', 'Hoàng', 'Huyền', 'Huệ', 'Huỳnh', 'Hà', 'Hàm', 'Hương', 'Hạ', 'Hạc', 'Hạnh', 'Hải', 'Hảo', 'Hằng', 'Họa', 'Hồ', 'Hồng',
        'Khiết', 'Khuê', 'Khánh', 'Khúc', 'Khả', 'Khải', 'Kim', 'Kiết', 'Kiều', 'Kỳ',
        'Lam', 'Lan', 'Linh', 'Liên', 'Liễu', 'Loan', 'Ly', 'Lâm', 'Lê', 'Lưu', 'Lệ', 'Lộc', 'Lục',
        'Mai', 'Minh', 'Mậu', 'Mộc', 'Mộng', 'Mỹ',
        'Nghi', 'Nguyên', 'Nguyết', 'Nguyệt', 'Ngân', 'Ngọc', 'Nhan', 'Nhã', 'Như', 'Nhất', 'Nhật',
        'Oanh',
        'Phi', 'Phong', 'Phương', 'Phượng', 'Phụng',
        'Quế', 'Quỳnh',
        'Sao', 'Song', 'Sông', 'Sơn', 'Sương',
        'Thanh', 'Thi', 'Thiên', 'Thiếu', 'Thiều', 'Thiện', 'Thu', 'Thuần', 'Thy', 'Thái', 'Thùy', 'Thúy', 'Thơ', 'Thư', 'Thương', 'Thạch', 'Thảo', 'Thục', 'Thụy', 'Thủy', 'Tiên', 'Tiểu', 'Trang', 'Triều', 'Triệu', 'Trà', 'Trâm', 'Trân', 'Trúc', 'Trầm', 'Tuyết', 'Tuệ', 'Tâm', 'Tùng', 'Tùy', 'Tú', 'Túy', 'Tường', 'Tịnh', 'Tố', 'Từ',
        'Uyên', 'Uyển',
        'Vi', 'Việt', 'Vy', 'Vàng', 'Vành', 'Vân', 'Vũ',
         'Xuân',
        'Yên', 'Yến',
        'Ái', 'Ánh',
        'Đan',  'Đoan', 'Đài', 'Đông', 'Đồng', 'Đan', 'Đoan',
        'Ý',
    );
    public $lastNameFemale=array(
        "Hồng","Hà","Trang ","Thảo","Liên","Thủy","Quỳnh","Oanh",
        "Nguyệt","Ngân", "Ngọc"
    );
    public function random()
    {




        return $this->firstName[array_rand($this->firstName)]." ".
               $this->midNameMale[array_rand($this->midNameMale)]." ".
               $this->lastName[array_rand($this->lastName)]."\n";


    }
    public function femaleName(){
        return $this->firstName[array_rand($this->firstName)]." ".
            $this->midNameFamale[array_rand($this->midNameFamale)]." ".
            $this->lastNameFemale[array_rand($this->lastNameFemale)]."\n";
    }
    public function maleName(){
        return $this->firstName[array_rand($this->firstName)]." ".
            $this->midNameMale[array_rand($this->midNameMale)]." ".
            $this->lastNameMale[array_rand($this->lastNameFemale)]."\n";
    }
}
