# -Exercise--Count_the_number_of_occurrences
[Bài tập] Đếm số lần xuất hiện của phần tử
Mục tiêu
Luyện tập triển khai thuật toán tìm kiếm trên mảng.

Nội dung
Trnong phần này, chúng ta sẽ viết một thuật toán để đếm số lần xuất hiện của một phần tử ở trong một mảng cho trước.

Hàm của của chúng ta sẽ nhận vào 2 tham số:

$numbers - mảng các số nguyên
$value - giá trị muốn đếm số lần xuất hiện
Hàm sẽ trả về số lần xuất hiện của giá trị $value trong mảng $numbers.

Hướng dẫn
Sử dụng một biến đếm $count để lưu số lần xuất hiện của $value, ban đầu thì $count có giá trị là 0
Duyệt toàn bộ các phần tử của mảng $numbers
Nếu có phần tử của $numbers trùng với giá trị $value thì tăng biến $count lên 1 đơn vị