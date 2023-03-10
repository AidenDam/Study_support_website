<h2>Giới thiệu về hệ thống</h2>
<p>     
    Đây là là hệ thống hỗ trợ học tập cho đổi tuyển Olympic tin học Đại học Công Nghiệp Hà Nôi.</p>
<p>
    Mã nguồn chương trình (viết bằng ngôn ngữ C, C++, Java,...) sẽ được hệ thống tự động biên dịch thành chương trình để kiểm tra tính chính xác thông qua các bộ dữ liệu có sẵn.
</p>
<h2>Kiến trúc tổng thể của hệ thống</h2>
<p>
    Hệ thống hiển thị danh sách các bài tập và các cuộc thi có trong cơ sở dữ liệu. Khi người dùng nộp mã nguồn chương trình, nó sẽ được lưu trực tiếp vào cơ sở dữ liệu. Hệ thống chấm điểm sẽ tự động lấy ra đoạn mã nguồn vừa được người dùng gửi từ cơ sở dữ liệu, lưu thành tệp với định dạng tương ứng, sau đó biên dịch, thực thi, so sánh đánh giá và cuối cùng là ghi kết quả đánh giá trở lại cơ sở dữ liệu.
</p>

<h2>Quy trình đánh giá</h2>
<p>
    Tài khoản Judge của hệ thống sẽ tiến hành biên dịch và thực hiện các mã nguồn được gửi lên bởi người dùng, so sánh các kết quả thực hiện với các bộ dữ liệu có sẵn, kiểm tra tính chính xác của mã nguồn. Nếu câu trả lời là chính xác, hệ thống sẽ gửi thông báo xác nhận kết quả, ngược lại hệ thống sẽ đưa ra một thông báo lỗi tương ứng. 
</p>
<p>
    Trong quá trình vận hành, hệ thống sẽ liên tục quét các mã nguồn được gửi lên cơ sở dữ liệu và sẽ tiến hành chấm điểm ngay đối với các mã nguồn chưa được chấm điểm.
</p>
<p>
    Để ngăn chặn người dùng gửi mã độc để phá hoại hệ thống, tài khoản Judge sẽ hoạt động như một sandbox với các thiết lập tương ứng để giới hạn các chức năng và quyền hạn khi thực thi mã nguồn chương trình.
</p>

