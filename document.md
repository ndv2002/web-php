# Hướng dẫn sử dụng cho project

## Cài đặt
1. Clone project về máy.
2. Tạo database trong phpmyadmin. (Import file `db.sql` vào đó)
3. Config Xampp (Bấm và config của `apache`, đổi 
```
DocumentRoot "<link to project>" (ex: "D:/HK222/Web/assignment/code")
<Directory "<link to project>" (ex: "D:/HK222/Web/assignment/code")
```
4. Run server `apache` và run `mysql`.

## Luồng chạy của chương trình.

Mọi link sẽ bị rewrite (sửa đổi) bởi file `.htaccess` và sẽ chạy và file `public/index.php`, mọi code sẽ bắt đầu từ đây.

Trong file `public/index.php` thì ta xử lý `login` và `url`. Tách `url` thành `controller`, `action`, và `para`.

Dựa và `controller` và `action` ta sẽ include file tương ứng vào. Tại đây (vẫn là file `public/index.php`) những đã được include nội dung của các page tương ứng. Khi ta thay đổi, tương tác thì cũng chỉ có `controller` và `action` thay đổi, ta vẫn đang nằm ở file `public/index.php`.

## Cách thêm mỗi page mới
1. Thêm page trong `router.php` tương ứng của `app` hoặc `admin`.
2. Thêm `controller` tương ứng nếu là một `controller` mới. (Xem ví dụ ở `SampleController.php`)
3. Thêm `method` (`action`) và file `controller` tương ứng.
4. Nếu gọi tới `view` thì thêm một `view` mới tương ứng trong folder `view`.
5. Nếu sử dụng một hàm mới (ví dụ **get user list**) thì thêm vào models tương ứng.


