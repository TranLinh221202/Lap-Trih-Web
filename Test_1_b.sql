Lấy ra danh sách khách hàng theo thứ tự tên theo Alphabet (Z->A), trong đó Tên
khách hàng có chữ a hoặc bắt đầu bằng chữ m, trong đó Email phải là dịch vụ của
Yahoo (example@yahoo.com). Thông tin hiển thị gồm: Mã khách hàng, Tên
khách hàng, Emai

SELECT * FROM users WHERE user_name LIKE '%a%' and user_name like 'm%' and user_email like '@yahoo.com' ORDER BY user_name ASC;	