# Paul To Global CSS Plugin for Moodle

Plugin local Moodle để áp dụng CSS tùy chỉnh trên toàn bộ website.

## Mô Tả

Plugin này cho phép bạn thêm CSS tùy chỉnh sẽ được tải trên tất cả các trang của website Moodle. CSS sẽ được inject vào phần `<head>` của mỗi trang.

## Tính Năng

- ✅ Áp dụng CSS toàn cục cho tất cả các trang
- ✅ Giao diện quản trị đơn giản
- ✅ Bật/tắt CSS dễ dàng
- ✅ Hỗ trợ đa ngôn ngữ (English, Tiếng Việt)
- ✅ Tuân thủ chuẩn Moodle coding standards

## Cài Đặt

### Bước 1: Sao chép plugin

Sao chép thư mục `paul_to_global_css` vào thư mục `/local` của Moodle:

```bash
cp -r paul_to_global_css /path/to/moodle/local/
```

Hoặc trên Windows:
```
xcopy /E /I paul_to_global_css C:\path\to\moodle\local\paul_to_global_css
```

### Bước 2: Cài đặt plugin

1. Đăng nhập vào Moodle với quyền quản trị
2. Truy cập: **Site administration → Notifications**
3. Moodle sẽ phát hiện plugin mới và yêu cầu cài đặt
4. Nhấn **Upgrade Moodle database now**

### Bước 3: Cấu hình CSS

1. Truy cập: **Site administration → Plugins → Local plugins → Global CSS**
2. Trong ô **Custom CSS**, nhập mã CSS của bạn
3. Đảm bảo **Enable Global CSS** được chọn
4. Nhấn **Save changes**

## Sử Dụng

### Ví Dụ CSS

```css
/* Thay đổi màu nền header */
#page-header {
    background-color: #2c3e50;
}

/* Tùy chỉnh font chữ */
body {
    font-family: 'Arial', sans-serif;
}

/* Thay đổi màu nút */
.btn-primary {
    background-color: #e74c3c;
    border-color: #c0392b;
}

/* Ẩn một số element */
.unwanted-element {
    display: none !important;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
}
```

## Cấu Trúc Plugin

```
local/paul_to_global_css/
├── version.php          # Thông tin phiên bản plugin
├── lib.php             # Các hàm callback chính
├── settings.php        # Trang cấu hình admin
├── lang/               # Các file ngôn ngữ
│   ├── en/
│   │   └── local_paul_to_global_css.php
│   └── vi/
│       └── local_paul_to_global_css.php
└── README.md           # Tài liệu này
```

## Cách Hoạt Động

Plugin sử dụng callback `local_paul_to_global_css_before_standard_html_head()` để inject CSS vào phần `<head>` của mỗi trang. Callback này được Moodle tự động gọi trước khi render HTML header.

## Gỡ Cài Đặt

1. Truy cập: **Site administration → Plugins → Plugins overview**
2. Tìm **Global CSS** trong danh sách Local plugins
3. Nhấn **Uninstall**
4. Xóa thư mục `local/paul_to_global_css`

## Yêu Cầu Hệ Thống

- Moodle 3.9 hoặc cao hơn
- PHP 7.2 hoặc cao hơn

## Hỗ Trợ

Để được hỗ trợ, vui lòng:
- Kiểm tra log Moodle tại: **Site administration → Reports → Logs**
- Xác minh plugin được cài đặt đúng: **Site administration → Plugins → Plugins overview**

## Bản Quyền

Copyright © 2025 Your Name

Plugin này là phần mềm tự do được phân phối theo giấy phép GNU General Public License v3.

## Lưu Ý Quan Trọng

- **Hiệu suất**: CSS sẽ được tải trên mỗi trang, nên giữ cho mã CSS gọn nhẹ
- **Cache**: Sau khi thay đổi CSS, có thể cần xóa cache Moodle: **Site administration → Development → Purge all caches**
- **Testing**: Luôn test CSS trên môi trường development trước khi áp dụng lên production
- **Backup**: Sao lưu CSS của bạn trước khi cập nhật hoặc thay đổi lớn

## Changelog

### Version 1.0 (2025-12-04)
- Phát hành phiên bản đầu tiên
- Hỗ trợ CSS toàn cục
- Giao diện quản trị
- Hỗ trợ đa ngôn ngữ
