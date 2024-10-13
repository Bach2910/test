@extends('layout.resources')
@section('main')
    <div class="container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tin tức</a>
        </div>
        <div class="first-title">
            <a class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 10%;">Tin tức</a>
            <h3>Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị cần biết</h3>
            <h6>Bởi - </h6>
            <div class="button-inform">
                <a type="button" class="btn btn-primary"><i class="fa-brands fa-facebook-f"></i></a>
                <a type="button" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                <a type="button" class="btn btn-success"><i class="fa-brands fa-pinterest-p"></i></a>
                <a type="button" class="btn btn-danger"><i class="fa-brands fa-whatsapp"></i></a>
                <a type="button" class="btn btn-warning"><i class="fa-brands fa-linkedin-in"></i></a>
                <a type="button" class="btn btn-dark"><i class="fa-brands fa-tumblr"></i></a>
            </div>
            <h5>Bỏ túi những <a href="#">dấu hiệu nhận biết ứng viên không trung thực</a> khi phỏng vấn sẽ giúp quá
                trình tìm kiếm và lựa chọn nhân tài của các nhà tuyển dụng trở nên thuận lợi hơn. <a href="#">Testcenter.vn</a>
                sẽ cùng bạn tìm hiểu những dấu hiệu điển hình nhận biết ứng viên đang không trung thực và cách xử lý
                hiệu quả nhất nhé.</h5>
            <div class="toc-wrapper">
                <div class="name"><h5>Table of Contents</h5>
                    <div class="icon" onclick="toggleContent()">☰</div>
                </div>
                <!-- Table of Contents -->
                <div class="toc" id="toc">
                    <ul>
                        <li><a href="#section1">1. Những dấu hiệu nhận biết ứng viên không trung thực</a>
                            <ul>
                                <li><a href="#section1-1">1.1. Ngôn ngữ cơ thể bất thường</a></li>
                                <li><a href="#section1-2">1.2. Trả lời vấn đề một cách mơ hồ</a></li>
                                <li><a href="#section1-3">1.3. Tập trung quá nhiều vào thành tựu nhóm</a></li>
                                <li><a href="#section1-4">1.4. Có xu hướng “phòng thủ” trước những câu hỏi khó</a></li>
                            </ul>
                        </li>
                        <li><a href="#section2">2. Cách xử lý khi nhận thấy dấu hiệu ứng viên không trung thực</a>
                            <ul>
                                <li><a href="#section2-1">2.1. Dành thời gian nghiên cứu trước CV của ứng viên</a></li>
                                <li><a href="#section2-2">2.2. Sử dụng các câu hỏi mang tính chi tiết</a></li>
                                <li><a href="#section2-3">2.3. Quan sát thái độ và ngôn ngữ cơ thể ở ứng viên</a></li>
                                <li><a href="#section2-4">2.4. Tìm hiểu trước về ứng viên trên các nền tảng mạng xã
                                        hội</a></li>
                                <li><a href="#section2-5">2.5. Xác định mục tiêu và kết quả mong đợi rõ ràng cho
                                        nhânLiên hệ với người tham chiếu</a></li>
                                <li><a href="#section2-6">2.6. Dựa vào trực giác và kinh nghiệm thực tế của bản thân</a>
                                </li>
                                <li><a href="#section2-6">2.7. Sử dụng bài đánh giá năng lực ứng viên</a></li>
                            </ul>
                        </li>
                        <li><a href="#section3">3. Tổng kết
                            </a></li>
                    </ul>
                </div>
            </div>
            <!-- Content Sections -->
            <section id="section1">
                <h2>Những dấu hiệu nhận biết ứng viên không trung thực</h2>
                <p>Để nâng cao giá trị của bản thân, tạo lợi thế cũng như thu hút sự chú ý của các nhà tuyển dụng mà
                    hiện nay, không ít ứng viên đã lựa chọn cách không trung thực trong CV và phỏng vấn qua việc “thổi
                    phồng” những gì họ có. Thực trạng này diễn ra ngày càng phổ biến đã khiến nhiều doanh nghiệp bận rộn
                    và gặp khó khăn hơn khi tìm kiếm, lựa chọn nhân tài.
                </p>
                <p>Dưới đây chính là một số dấu hiệu nhận biết ứng viên không trung thực khi phỏng vấn:</p>
            </section>
            <br>
            <section id="section1-1">
                <h1>Ngôn ngữ cơ thể bất thường</h1>
                <p>Không chỉ ứng viên, đa số chúng ta thường đều vô thức để lộ một vài hành động ngẫu nhiên trong quá
                    trình tương tác, trò chuyện với người đối diện. Khi nói dối, ứng viên sẽ thường có tâm trạng bứt
                    rứt, bồn chồn đi kèm cùng một số động tác như cọ xát hai tay, gãi cổ, nghịch tóc v.vv..</p>
                <p>Cùng với đó, việc họ liên tục đảo mắt, tránh giao tiếp bằng ánh mắt, giọng nói thay đổi khi trả lời
                    câu hỏi, âm vực cao, nghẹt thở, nói lắp bắp, thường xuyên nuốt nước bọt v.vv.. cũng được xem như
                    những dấu hiệu thường thấy để nhận biết tính đúng – sai trong lời nói của họ.</p>
                <p>Tuy nhiên, nhà tuyển dụng cần chú ý rằng đây cũng có thể là biểu hiện của sự lo lắng, căng thẳng khi
                    ứng viên tham gia phỏng vấn. Do vậy, bạn cần kết hợp linh hoạt giữa cả dấu hiệu cùng bối cảnh hiện
                    tại để đưa ra nhận định chính xác nhất về ứng viên.</p>
                <p>>>><span class="bolder">Xem thêm:</span><a href="" class="high-light"> Ứng viên là gì? Những phương pháp đánh giá ứng viên hiệu quả</a></p>
            </section>
            <br>
            <section id="section1-2">
                <h1>Trả lời vấn đề một cách mơ hồ</h1>
                <p>Trong quá trình phỏng vấn, nhà tuyển dụng có thể gặp phải tình huống đặt câu hỏi nhưng ứng viên trả lời không đúng trọng tâm hoặc sai vấn đề. Đây không chỉ là dấu hiệu cho thấy ứng viên chưa chuẩn bị kỹ càng mà còn là minh chứng cho việc họ không nói sự thật.</p>
                <p>Đối với những câu hỏi mang tính chuyên môn cao, ứng viên có năng lực thường đưa ra bằng chứng liên quan tới số liệu, kết quả công việc đạt được thay vì các thông tin mơ hồ.</p>
                <p>Tất nhiên, chúng ta không thể loại trừ khả năng ứng viên đang rơi vào trạng thái lo lắng khi phỏng vấn. Khi đối diện với thực tế này, nhà tuyển dụng hãy thúc đẩy hoặc tạo cơ hội để ứng viên đi sâu hơn vào chi tiết thông qua các câu hỏi nhằm xác định tâm lý hiện tại của họ (hồi hộp hay nói dối).</p>
                <br>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-2.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Nhà tuyển dụng nên lưu tâm tới những ứng viên trả lời vấn đề quá mức mơ hồ</i>
            </section>
            <br>
            <section id="section1-3">
                <h1>Tập trung quá nhiều vào thành tựu nhóm</h1>
                <p>Mặc dù là một yếu tố cần thiết để đưa ra đánh giá, vậy nhưng với những ứng viên tập trung quá nhiều vào thành tích của họ với tư cách là thành viên đội nhóm, nhà tuyển dụng vẫn nên dành nhiều sự chú ý. Ở trường hợp này, khi ứng viên đề cập đến một dự án tập thể, bạn hãy hỏi về vai trò cụ thể của họ là gì và yêu cầu họ nói cho bạn biết những công việc họ đã thực hiện một mình trong nhóm.</p>
            </section>
            <br>
            <section id="section1-4">
                <h1>Có xu hướng “phòng thủ” trước những câu hỏi khó</h1>
                <p>Trong một vài trường hợp, ứng viên có thể gây “khó dễ” cho bên tuyển dụng khi bạn đặt những câu hỏi liên quan tới kiến thức, kinh nghiệm chuyên môn của họ. Nếu ứng viên bạn đang phỏng vấn có xu hướng cố tình “lướt” qua những điều bạn đang quan tâm hoặc làm chệch hướng câu hỏi, hãy chú ý tới họ bởi đây có thể là biểu hiện của việc không trung thực.</p>
                <p>>>><span class="bolder">Xem thêm:</span><a href="" class="high-light"> Chuyên môn là gì? Cách đánh giá chuyên môn trong phỏng vấn – Testcenter</a></p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-3.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Ứng viên nói dối thường có xu hướng bỏ qua những câu hỏi khó từ nhà tuyển dụng</i>
            </section>
            <br>
            <section id="section2">
                <h2>Cách xử lý khi nhận thấy dấu hiệu ứng viên không trung thực</h2>
                <p>Sau khi bỏ túi một số dấu hiệu nhận biết ứng viên không trung thực, việc nhà tuyển dụng cần thực hiện ngay tiếp theo là tìm ra giải pháp xử lý tình trạng này. Bạn có thể tham khảo 07 cách loại bỏ các “Pinocchio” và nâng cao hiệu quả tuyển dụng, sàng lọc nhân tài như sau:</p>
            </section>
            <br>
            <section id="section2-1">
                <h1>Dành thời gian nghiên cứu trước CV của ứng viên</h1>
                <p>Dành thời gian nghiên cứu trước CV của ứng viên là bước đầu tiên và không thể thiếu mà nhà tuyển dụng cần làm trước khi tiến hành phỏng vấn chính thức. Trên thực tế, bạn không thể xem xét kỹ lưỡng mọi hồ sơ do người ứng tuyển gửi tới. Bởi vậy, việc trang bị sẵn kỹ năng tổng hợp, đọc đúng trọng tâm, ghi chú lại những vấn đề quan trọng v.vv.. sẽ trở nên vô cùng cần thiết trong tình huống này.</p>
                <p>Nhà tuyển dụng cần tỉnh táo và phân biệt chính xác các nội dung được trình bày trong CV. Đôi khi, CV có nội dung tương tự nhau, không trình bày vấn đề một cách cụ thể mà chỉ nhắc đến khái quát, sử dụng ngôn từ “sáo rỗng” v.vv.. cũng là những “cảnh báo đỏ” mà bạn cần chú ý.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-4.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Nhà tuyển dụng nên dành thời gian nghiên cứu CV của ứng viên trước phỏng vấn</i>
            </section>
            <br>
            <section id="section2-2">
                <h1>Sử dụng các câu hỏi mang tính chi tiết</h1>
                <p>Đối mặt với ứng viên đang trình bày về những thành tích ấn tượng của họ và điều này khiến nhà tuyển dụng cảm thấy nghi ngờ, bạn hãy tìm kiếm sự thật bằng cách sử dụng các câu hỏi mang tính cụ thể. Chẳng hạn, khi người ứng tuyển cho rằng họ rất thông thạo tiếng Anh, bạn có thể đưa ra đề nghị “Vậy nếu tôi tiếp tục tiến hành cuộc phỏng vấn này bằng tiếng Anh, bạn sẽ thấy ổn chứ?”.</p>
            </section>
            <br>
            <section id="section2-3">
                <h1>Quan sát thái độ và ngôn ngữ cơ thể ở ứng viên</h1>
                <p>Như đã đề cập ở phần trên, ngôn ngữ cơ thể ở ứng viên trong buổi phỏng vấn là dấu hiệu rất quan trọng nếu nhà tuyển dụng cần kiểm tra tính chân thực với thông tin mà họ cung cấp.</p>
                <p>Khi nhận thấy ứng viên có một số biểu hiện không thoải mái như vặn người, sờ tay lên tóc hoặc lên mặt, sửa lại kính hoặc cổ áo, lảng tránh giao tiếp ánh mắt, xoắn ngón tay v.vv.. bạn cần tiếp tục đặt thêm câu hỏi về nội dung đang bàn luận và quan sát thái độ của họ. Thông thường, ứng viên sẽ tỏ ra đặc biệt không thoải mái khi phải nói dối tới lần thứ ba.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-5.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Thái độ và ngôn ngữ cơ thể của ứng viên có thể là bằng chứng cho lời nói của họ</i>
            </section>
            <br>
            <section id="section2-4">
                <h1>Tìm hiểu trước về ứng viên trên các nền tảng mạng xã hội</h1>
                <p>Sự phát triển của các nền tảng mạng xã hội đã trở thành nguồn tài nguyên hữu ích cho phép nhà tuyển dụng có thể kiểm tra thông tin về ứng viên một cách dễ dàng. Theo đó, bạn có thể tìm kiếm trên tài khoản Zalo, Facebook, Twitter, LinkedIn v.vv.. mà ứng viên đang sử dụng và tiến hành đối chiếu mức độ trùng khớp về dữ liệu tại đây với hồ sơ dự tuyển.</p>
                <p>Trong quá trình này, nhà tuyển dụng còn có cơ hội phát hiện thêm những điều ứng viên chia sẻ về công việc từng làm. Thông qua đó, bạn cũng sẽ phán đoán được phần nào về bản chất thực sự của họ và so sánh với điều họ đang thể hiện ở thực tế.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-6.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Nhà tuyển dụng có thể xác minh thêm thông tin về ứng viên qua mạng xã hội</i>
            </section>
            <br>
            <section id="section2-5">
                <h1>Liên hệ với người tham chiếu</h1>
                <p>Đối với những vị trí quan trọng, nhà tuyển dụng hãy kết hợp sử dụng phương pháp người tham chiếu (<a href="#" class="high-light">Reference Check</a>) để kiểm chứng thông tin của ứng viên. Việc không trung thực trong thời gian làm việc, chức danh công việc, trách nhiệm v.vv.. là những vấn đề xảy ra tương đối phổ biến.</p>
                <p>Thậm chí, ứng viên còn có thể “tạo ra” người tham chiếu giả. Nếu cảm thấy nghi ngờ, nhà tuyển dụng nên kiểm tra bằng cách trích dẫn sai thông tin ứng viên và xem xét phản ứng ở người tham chiếu. Giả sử, ứng viên xác nhận mức lương công ty cũ chi trả cho họ là 08 triệu VNĐ/tháng, bạn cần hỏi người tham khảo rằng “A từng được trả mức lương 07 triệu VNĐ/tháng khi làm việc ở công ty bạn đúng không?”.</p>
            </section>
            <br>
            <section id="section2-6">
                <h1>Dựa vào trực giác và kinh nghiệm thực tế của bản thân</h1>
                <p>Với trường hợp đã làm việc thời gian dài trong lĩnh vực tuyển dụng, bạn sẽ có khả năng nhận biết một ứng viên nói dối mà thường không gặp quá nhiều khó khăn. Đôi khi, hãy chú ý và lắng nghe “tiếng lòng” của mình. Tuy nhiên, đây là phương pháp chỉ mang tính chủ quan. Vì vậy, nhà tuyển dụng cũng cần thận trọng và không nên để bản thân bị phụ thuộc quá nhiều vào trực giác.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-7.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Dựa vào kinh nghiệm cũng là cách hay để nhận biết ứng viên trung thực hay không</i>
            </section>
            <br>
            <section id="section2-7">
                <h1>Sử dụng bài đánh giá năng lực ứng viên</h1>
                <p>Cuối cùng, kiểm tra kỹ năng chuyên môn thông qua bài test năng lực cũng là cách ứng phó với tình trạng ứng viên không trung thực vô cùng hiệu quả mà nhà tuyển dụng nên tham khảo.</p>
                <p>Hiện nay, với sự ra đời của Testcenter.vn – nền tảng đánh giá năng lực nhân sự hàng đầu Việt Nam, các doanh nghiệp đã có thể thu thập dữ liệu thông tin nhằm mục đích kiểm tra <span class="high-light">IQ, EQ</span> cùng năng lực thực sự của ứng viên vô cùng dễ dàng.</p>
                <p>Sử dụng Testcenter.vn, nhà tuyển dụng sẽ được hỗ trợ tạo form mẫu đánh giá người ứng tuyển ngay sau phỏng vấn, giúp đưa ra quyết định chính xác và hạn chế tối đa tuyển sai người hoặc nhân viên nghỉ việc chỉ sau một thời gian ngắn đi làm.</p>
                <p>Không chỉ hỗ trợ doanh nghiệp tiết kiệm lên tới 50% thời gian đánh giá ứng viên, rút ngắn quy trình tuyển dụng, Testcenter.vn còn giảm tới 30% chi phí thuê cơ sở vật chất, trang thiết bị và xây dựng đề thi cho việc đánh giá nhân sự.</p>
                <p>Thông qua bài test được xây dựng dựa trên tiêu chuẩn quốc tế của Testcenter.vn, nhà tuyển dụng có thể xác định việc liệu ứng viên có đang “phóng đại” khả năng của mình hay không một cách khách quan nhất.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-8.jpg" alt="" style="width: 100%;height:430px"><br>
                <i>Bài test năng lực là minh chứng phản ánh rõ nét nhất khả năng của ứng viên</i>
            </section>
            <br>
            <section id="section3">
                <h2>Tổng kết</h2>
                <p>Như vậy, bài viết do Testcenter.vn mang tới trên đây đã giúp bạn tổng hợp nhanh những <span class="bolder"> dấu hiệu nhận biết ứng viên không trung thực </span>chính xác. Nhìn chung, trung thực luôn được xem là một trong các tiêu chí hàng đầu để đánh giá nhân sự. Do đó, nhà tuyển dụng hãy chú ý rà soát, sàng lọc kỹ càng để đảm bảo có thể tìm ra ứng viên tiềm năng nhất cho tổ chức của mình!</p>
                <p><b>TestCenter.vn – Nền tảng đánh giá năng lực nhân sự cung cấp giải pháp test online dành cho doanh nghiệp Việt Nam. TestCenter.vn với ngân hàng 300+ đề thi tuyển dụng nhân sự mẫu hỗ trợ quy trình đánh giá năng lực nhân sự. Tự hào đồng hành cùng +500 khách hàng doanh nghiệp hàng đầu như Honda, Sailun, Petrolimex, Ngân hàng TMCP Hàng Hải Việt Nam (MSB),…</b></p>
                <p><b>Doanh nghiệp sẽ tiết kiệm được 30% chi phí so với cách tuyển dụng truyền thống khi sử dụng Testcenter. <a href="" class="highlight">Vui lòng ĐĂNG KÝ TẠI ĐÂY</a> để nhận tư vấn 1-1 về các tính năng của Nền tảng đánh giá năng lực nhân sự TestCenter</b></p>
            </section>
           <div class="end-first">
               <div class="tag">
                   TAGS
               </div>
               <button type="button" class="btn btn-outline-secondary">dấu hiệu nhận biết ứng viên không trung thực</button>
           </div>
            <div class="button-inform">
                <a type="button" class="btn btn-primary"><i class="fa-brands fa-facebook-f"></i></a>
                <a type="button" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                <a type="button" class="btn btn-success"><i class="fa-brands fa-pinterest-p"></i></a>
                <a type="button" class="btn btn-danger"><i class="fa-brands fa-whatsapp"></i></a>
                <a type="button" class="btn btn-warning"><i class="fa-brands fa-linkedin-in"></i></a>
                <a type="button" class="btn btn-dark"><i class="fa-brands fa-tumblr"></i></a>
            </div>
            <div class="next-new d-flex justify-content-between gap-6 ">
                <div class="left-new w-40 text-start">
                    <span class="next-button">Bài trước</span><br>
                    <a href="#">Tuyển Mass là gì? Nguyên tắc vàng để tuyển Mass hiệu quả</a>
                </div>
                <div class="right-new w-30 text-end">
                    <span class="next-button">Bài tiếp theo</span><br>
                    <a href="#">Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp</a>
                </div>
            </div>
            <br>
            <br>
            <div class="button-inform">
                <button type=button class=" btn btn-primary">Bài viết mới nhất</button>
                <button type=button class=" btn btn-outline-white">Xem thêm</button>
            </div>
            <hr class="line">
            <div class="card-main-footer" >
                <div class="card-body-footer" id="articleContainer">
                </div>
            </div>
            <div class="next-button">
                <button id="prevBtn">&larr;</button>
                <button id="nextBtn">&rarr;</button>
            </div>
            <script>
                // Sample data: you can replace this with your dynamic data
                const articles = [
                    {  summary: "Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết cân bằng", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-218x150.jpg" },
                    {  summary: "Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-218x150.jpg" },
                    {  summary: "Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị cần biết", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-218x150.jpg" },
                    {  summary: "Tuyển Mass là gì? Nguyên tắc vàng để tuyển Mass hiệu quả", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/03/tuyen-mass-la-gi-testcenter-218x150.jpg" },
                    {  summary: "Bonding là gì? Mở “khóa” các hoạt động gắn kết tình đồng đội", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/bonding-la-gi-testcenter-1-218x150.jpg" },
                    {  summary: "Revenue Stream là gì? Phương pháp tăng trưởng dòng doanh", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/revenue-stream-la-gi-testcenter-218x150.jpg" },
                    {  summary: "Pricing strategy là gì? Có bao nhiêu chiến lược giá?", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/chienluocgialagi-testcenter-218x150.jpg" },
                    { summary: "06 cách giải quyết mâu thuẫn trong nội bộ doanh nghiệp dành cho nhà quản lý", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/cachgiaiquyetmauthuan-testcenter-218x150.jpg" },
                    {  summary: "Flowchart là gì? Cách ứng dụng Flowchart vào quy trình tuyển dụng hiệu quả", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/flowchart-la-gi-testcenter-218x150.jpg" },
                    {  summary: "Quan tâm là gì? 10 cách quan tâm nhân viên mới nhất", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/quan-tam-la-gi-testcenter-218x150.jpg" },
                    {  summary: "Phẩm chất là gì? 8 phẩm chất cần có của nhân viên khi đánh giá", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/pham-chat-la-gi-testcenter-218x150.jpg" },
                    { summary: "Ma trận 9 Box Grid – Đánh giá và phát triển nhân viên hiệu quả", image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/11/ma-tran-9-box-grid-testcenter-218x150.jpg" }
                ];

                const articlesPerPage = 3;
                let currentPage = 1;

                function displayArticles(page) {
                    const startIndex = (page - 1) * articlesPerPage;
                    const endIndex = page * articlesPerPage;
                    const articlesToDisplay = articles.slice(startIndex, endIndex);

                    const articleContainer = document.getElementById('articleContainer');
                    articleContainer.innerHTML = '';

                    articlesToDisplay.forEach(article => {
                        articleContainer.innerHTML += `
                    <div class="card">
                        <img href="#" src="${article.image_url}" alt="">
                        <a href="#">${article.summary}</a>
                    </div>
                `;
                    });
                }

                function updateButtons() {
                    const prevBtn = document.getElementById('prevBtn');
                    const nextBtn = document.getElementById('nextBtn');
                    const totalPages = Math.ceil(articles.length / articlesPerPage);

                    prevBtn.disabled = currentPage === 1;
                    nextBtn.disabled = currentPage === totalPages;
                }

                document.getElementById('prevBtn').addEventListener('click', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        displayArticles(currentPage);
                        updateButtons();
                    }
                });

                document.getElementById('nextBtn').addEventListener('click', function() {
                    const totalPages = Math.ceil(articles.length / articlesPerPage);
                    if (currentPage < totalPages) {
                        currentPage++;
                        displayArticles(currentPage);
                        updateButtons();
                    }
                });

                // Initial display
                displayArticles(currentPage);
                updateButtons();
            </script>
        </div>
        <script>
            function toggleContent() {
                var toc = document.getElementById("toc");
                var icon = document.querySelector(".icon");
                toc.classList.toggle("open");
                icon.classList.toggle("open");
            }
        </script>
    </div>
@endsection
