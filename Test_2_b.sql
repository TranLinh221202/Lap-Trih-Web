Lấy ra danh sách khách hàng theo thứ tự tên theo Alphabet (Z->A), trong đó Tên
khách hàng có chữ a hoặc bắt đầu bằng chữ m, trong đó Email phải là dịch vụ của
Yahoo (example@yahoo.com). Thông tin hiển thị gồm: Mã khách hàng, Tên
khách hàng, Emai

SELECT * FROM users WHERE user_name LIKE '%a%' and user_name like 'm%' and user_email like '@yahoo.com' ORDER BY user_name ASC;	

Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền. Mỗi user chỉ chọn ra 1 đơn
hàng có giá tiền lớn nhất

SELECT users.user_id, users.user_name, orders.order_id, products.product_price
FROM users			
INNER JOIN orders ON users.user_id = orders.user_id
INNER JOIN order_details ON orders.order_id = order_details.order_id				
INNER JOIN products ON order_details.product_id = products.product_id;				
			
			

