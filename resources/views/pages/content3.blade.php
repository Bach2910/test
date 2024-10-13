@extends('layout.resources')
@section('main')
    <div class="container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tin tức</a>
        </div>
        <div class="first-title">
            <a class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 10%;">Tin tức</a>
            <h3>Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp</h3>
            <h6>Bởi - </h6>
            <div class="button-inform">
                <a type="button" class="btn btn-primary"><i class="fa-brands fa-facebook-f"></i></a>
                <a type="button" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                <a type="button" class="btn btn-success"><i class="fa-brands fa-pinterest-p"></i></a>
                <a type="button" class="btn btn-danger"><i class="fa-brands fa-whatsapp"></i></a>
                <a type="button" class="btn btn-warning"><i class="fa-brands fa-linkedin-in"></i></a>
                <a type="button" class="btn btn-dark"><i class="fa-brands fa-tumblr"></i></a>
            </div>
            <h5>Nắm được khái niệm <a href=""><b>Lean là gì</b></a> sẽ giúp nhà quản trị tìm ra phương pháp để giảm
                thiểu chi phí sản xuất nhằm tối ưu lợi nhuận hiệu quả. Chi tiết về khái niệm Lean cũng như những cách
                ứng dụng mô hình này cho tổ chức,
                <a href=""><b>Testcenter.vn</b></a> sẽ giúp bạn khai thác sâu trong bài viết thuộc chuyên mục tin tức
                dưới đây!</h5>
            <div class="toc-wrapper">
                <div class="name"><h5>Table of Contents</h5>
                    <div class="icon" onclick="toggleContent()">☰</div>
                </div>
                <!-- Table of Contents -->
                <div class="toc" id="toc">
                    <ul>
                        <li><a href="#section1">1. Tổng quan về Lean</a>
                            <ul>
                                <li><a href="#section1-1">1.1. Nguồn gốc hình thành của mô hình Lean</a></li>
                                <li><a href="#section1-2">1.2. Lean là gì?</a></li>
                                <li><a href="#section1-3">1.3. Sự khác biệt giữa mô hình sản xuất truyền thống với mô
                                        hình Lean là gì?</a></li>
                            </ul>
                        </li>
                        <li><a href="#section2">2. Nguyên tắc cốt lõi của mô hình Lean là gì?</a></li>
                        <li><a href="#section3">3. Lợi ích mà mô hình Lean mang lại cho doanh nghiệp</a></li>
                        <li><a href="#section4">4. Đối tượng áp dụng của mô hình Lean là gì?</a></li>
                        <li><a href="#section5">5. Sử dụng mô hình Lean để nhận diện các loại lãng phí trong sản
                                xuất</a>
                            <ul>
                                <li><a href="#section5-1">5.1 Lỗi sản phẩm (Defects)</a></li>
                                <li><a href="#section5-2">5.2 Sản xuất dư thừa (Over Production)</a></li>
                                <li><a href="#section5-3">5.3 Thời gian chờ đợi (Waiting)</a></li>
                                <li><a href="#section5-4">5.4 Không tận dụng tài năng (Non-utilized Talent)</a></li>
                                <li><a href="#section5-5">5.5 Vận chuyển (Transportation)</a></li>
                                <li><a href="#section5-6">5.6 Chuyển động (Motion)</a></li>
                                <li><a href="#section5-7">5.7 Quy trình dư thừa (Extra Process)</a></li>
                                <li><a href="#section5-8">5.8 Kho hàng (Inventory)</a></li>
                            </ul>
                        </li>
                        <li><a href="#section6">Phương pháp ứng dụng để phát huy tối đa hiệu quả của Lean trong doanh
                                nghiệp</a>
                            <ul>
                                <li><a href="section6-1">6-1. Thiết lập chiến lược mục tiêu rõ ràng</a></li>
                                <li><a href="section6-2">6-2. Kiên định với mô hình Lean</a></li>
                                <li><a href="section6-3">6-3. Vạch ra chuỗi giá trị từ đầu đến cuối</a></li>
                                <li><a href="section6-4">6-4. Đặt tiêu chuẩn rõ ràng ngay từ đầu</a></li>
                                <li><a href="section6-5">6-5. Tập trung vào nhóm lãnh đạo tuyến đầu</a></li>
                                <li><a href="section6-6">6-6. Phân bổ hợp lý các nguồn lực</a></li>
                                <li><a href="section6-7">6-7. Sát sao ngay từ quy trình tuyển dụng</a></li>
                            </ul>
                        </li>
                        <li><a href="#section7">7. Tổng kết</a></li>
                    </ul>
                </div>
            </div>
            <!-- Content Sections -->
            <section id="section1">
                <h2>Tổng quan về Lean</h2>
                <p>Đối với Lean, trước khi đi vào tìm hiểu những phương pháp ứng dụng hiệu quả mô hình này để tối ưu chi
                    phí cho doanh nghiệp, chúng ta sẽ cần nắm được một thông tin cơ bản về nguồn gốc hình thành và khái
                    niệm Lean:
                </p>
            </section>
            <br>
            <section id="section1-1">
                <h1>Nguồn gốc hình thành của mô hình Lean</h1>
                <p>Vào những năm 1980, nhiều công ty sản xuất phương Tây nhận ra rằng họ đang đánh mất thị phần với tốc
                    độ nhanh chóng vào tay các doanh nghiệp Nhật Bản. Từ đây, một cuộc nghiên cứu sự khác biệt giữa
                    Toyota – tập đoàn ô tô hàng đầu Nhật Bản – với những tổ chức đến từ khu vực Mỹ, châu Âu – đã được mở
                    ra.</p>
                <p>Sau đó, kết quả của quá trình điều tra chỉ ra rằng việc Toyota tập trung loại bỏ tối đa yếu tố gây
                    lãng phí thay vì sản xuất ồ ạt trong khi hoạt động giúp thương hiệu này thu về khoản lợi nhuận khổng
                    lồ. Cũng nhờ sự kiện nói trên, thuật ngữ Lean Manufacturing (tên viết tắt: Lean) hay Toyota
                    Production System – quy trình sản xuất tinh gọn – đã chính thức ra đời.</p>
            </section>
            <br>
            <section id="section1-2">
                <h1>Lean là gì?</h1>
                <p>Vậy, Lean là gì? Lean là mô hình quản trị doanh nghiệp theo triết lý tinh gọn có nguồn gốc từ lĩnh
                    vực sản xuất và dần được ứng dụng phổ biến trong nhiều ngành nghề khác nhau. Mô hình ra đời dựa trên
                    ý tưởng về cải thiện năng suất cũng như giảm thiểu lãng phí khi kinh doanh.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-1.jpg" alt=""
                     style="width: 100%;height:430px"><br>
                <i>Lean là mô hình quản trị tinh gọn có nguồn gốc từ lĩnh vực sản xuất</i>
            </section>
            <br>
            <section id="section1-3">
                <h1>Sự khác biệt giữa mô hình sản xuất truyền thống với mô hình Lean là gì?</h1>
                <p>So với mô hình sản xuất truyền thống, Lean sở hữu những điểm khác biệt rõ ràng như sau:</p>
                <table>
                    <tr>
                        <th>Tiêu chí</th>
                        <th>Sản xuất truyền thống</th>
                        <th>Sản xuất tinh gọn</th>
                    </tr>
                    <tr>
                        <td>Triết lý</td>
                        <td>Tập trung vào sản xuất hàng loạt và tối đa hóa tài nguyên có sẵn</td>
                        <td>Tập trung vào tạo giá trị cho khách hàng, loại bỏ yếu tố lãng phí và tối ưu quy trình sản xuất</td>
                    </tr>
                    <tr>
                        <td>Chiến lược</td>
                        <td>Sản xuất được thúc đẩy nhờ dự báo doanh số</td>
                        <td>Sản xuất được thúc đẩy nhờ nhu cầu của khách hàng</td>
                    </tr>
                    <tr>
                        <td>Tầm nhìn và mục tiêu</td>
                        <td>Tập trung vào lợi nhuận ngắn hạn và tăng năng suất</td>
                        <td>Tập trung vào lợi nhuận dài hạn, tạo giá trị cho khách hàng, tăng chất lượng, giảm lãng phí và xây dựng môi trường làm việc tốt</td>
                    </tr>
                    <tr>
                        <td>Quy trình sản xuất</td>
                        <td>Quy trình sản xuất không linh hoạt, các công đoạn bị tách rời</td>
                        <td>Quy trình sản xuất linh hoạt, các công đoạn liên mạch</td>
                    </tr>
                    <tr>
                        <td>Đổi mới và cải tiến</td>
                        <td>Nếu quy trình sản xuất hiện tại ổn định, doanh nghiệp sẽ không thay đổi mà tập trung <a href="" class="high-light">đào tạo nội bộ</a> yếu tố con người để giảm thiểu lỗi sai</td>
                        <td>Doanh nghiệp không ngừng cải tiến quy trình sản xuất và con người</td>
                    </tr>
                </table>
            </section>
            <br>
            <section id="section2">
                <h2>Nguyên tắc cốt lõi của mô hình Lean là gì?</h2>
                <p>Mô hình Lean hoạt động dựa trên 05 nguyên tắc cốt lõi, bao gồm:</p>
                <ul>
                    <li><b>Nguyên tắc 01:</b> Tập trung vào quy trình sản xuất.</li>
                    <li><b>Nguyên tắc 02:</b> Tối đa hóa giá trị và tối thiểu hóa lãng phí.</li>
                    <li><b>Nguyên tắc 03:</b> Tiêu chuẩn hóa mọi nhiệm vụ công việc.</li>
                    <li><b>Nguyên tắc 04:</b> Tạo dòng chảy sản xuất.</li>
                    <li><b>Nguyên tắc 05:</b> Nhanh chóng giải quyết vấn đề.</li>
                </ul>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-2.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Mô hình sản xuất tinh gọn hoạt động dựa trên 05 nguyên tắc cốt lõi</i>
            </section>
            <br>
            <section id="section3">
                <h2>Lợi ích mà mô hình Lean mang lại cho doanh nghiệp</h2>
                <p>Khi ứng dụng Lean, mô hình sản xuất tinh gọn này mang tới cho doanh nghiệp hàng loạt lợi ích như:</p>
                <ul>
                    <li>Tối ưu hóa dòng chảy.</li>
                    <li>Thúc đẩy cải tiến liên tục.</li>
                    <li>Đưa ra quyền hạn và trách nhiệm với từng đội ngũ.</li>
                    <li>Điều phối quy trình làm việc giữa các đội ngũ.</li>
                    <li>Mở rộng quy mô đến danh mục đầu tư.</li>
                    <li>Thúc đẩy sáng kiến chiến lược.</li>
                </ul>
            </section>
            <br>
            <section id="section4">
                <h2>Đối tượng áp dụng của mô hình Lean là gì?</h2>
                <p>Trên thực tế, việc ứng dụng LEAN không chỉ gói gọn trong phạm vi doanh nghiệp và thị trường kinh doanh. Thay vào đó, mọi ngành nghề cung cấp sản phẩm/dịch vụ như ngân hàng, bệnh viện, hành chính, du lịch, chăm sóc sức khỏe v.vv.. đều được xem là đối tượng phù hợp của mô hình này.</p>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-3.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Mọi ngành nghề có cung cấp sản phẩm hoặc dịch vụ đều có thể áp dụng Lean</i>
            </section>
            <br>
            <section id="section5">
                <h2>Sử dụng mô hình Lean để nhận diện các loại lãng phí trong sản xuất</h2>
                <p>Dựa trên sự phổ biến của các loại lãng phí, đồng sáng lập của Lean Enterprise Institute – Jean Cunningham – cùng các nhà nghiên cứu khác đã phát triển và trình bày mô hình tổng hợp D.O.W.N.T.I.M.E với nội dung như sau:</p>
            </section>
            <br>
            <section id="section5-1">
                <h1>Lỗi sản phẩm (Defects)</h1>
                <p>Defects là những sản phẩm bị lỗi trong quá trình doanh nghiệp sản xuất. Đây được xem như yếu tố gây lãng phí hàng đầu bởi chúng không hề tạo ra bất cứ giá trị nào cho tổ chức.</p>
            </section>
            <br>
            <section id="section5-2">
                <h1>Sản xuất dư thừa (Over Production)</h1>
                <p>Trong một số trường hợp, sản xuất dư thừa chính là nguồn lãng phí lớn nhất do hoạt động này gây nên tình trạng gia tăng tồn kho, lao động, nguyên liệu v.v.. Vấn đề này thường xảy ra với các doanh nghiệp có quy trình phân phối không cân đối hoặc sở hữu lô hàng lớn.</p>
            </section>
            <br>
            <section id="section5-3">
                <h1>Thời gian chờ đợi (Waiting)</h1>
                <p>Waiting là khoảng thời gian mà nhân công phải chờ đợi để một sự kiện nào đó xảy ra. Lúc này, họ sẽ không thể tạo bất cứ giá trị hữu ích nào cho doanh nghiệp, khiến quỹ thời gian trôi qua lãng phí.</p>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-4.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Thời gian chờ đợi là một trong các loại lãng phí tiêu biểu trong sản xuất</i>
            </section>
            <br>
            <section id="section5-4">
                <h1>Không tận dụng tài năng (Non-utilized Talent)</h1>
                <p>Non-utilized Talent xảy ra khi doanh nghiệp không nhận thấy và không tận dụng một cách hiệu quả những kỹ năng và khả năng mà nhân viên có thể mang lại.</p>
            </section>
            <br>
            <section id="section5-5">
                <h1>Vận chuyển (Transportation)</h1>
                <p>Transportation đề cập tới khoảng thời gian và công sức dùng cho việc di chuyển nguyên vật liệu hoặc hàng hóa trong nội bộ nhà máy hay giữa các địa điểm với nhau nhưng lại không tạo được giá trị gì. Vấn đề này sẽ biểu hiện rõ ràng hơn ở những doanh nghiệp quy mô lớn và hoạt động ở nhiều cơ sở.</p>
            </section>
            <br>
            <section id="section5-6">
                <h1>Chuyển động (Motion)</h1>
                <p>Motion là việc nhân viên phải dành nhiều thời gian để di chuyển từ nơi này tới nơi khác. Tuy nhiên, trong quá trình đó, họ không tạo ra giá trị cho sản phẩm/dịch vụ của doanh nghiệp.</p>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-5.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Việc di chuyển từ nơi này sang nơi khác mà không tạo giá trị gây lãng phí thời gian</i>
            </section>
            <br>
            <section id="section5-7">
                <h1>Quy trình dư thừa (Extra Process)</h1>
                <p>Hiện nay, một số quy trình sản xuất có tồn tại các bước không đóng góp bất cứ giá trị nào cho tổ chức. Lúc này, doanh nghiệp cần tiến hành xem xét lại khâu vận hành này để xác định bước dư thừa và tiến tới loại bỏ nhằm tối ưu <a href="#" class="high-light">hiệu suất làm việc</a> cho công ty.</p>
            </section>
            <br>
            <section id="section5-8">
                <h1>Kho hàng (Inventory)</h1>
                <p>Mặc dù duy trì lượng hàng tồn kho nhất định là điều cần thiết trong một vài tình huống, giúp đảm bảo có thể cung ứng sản phẩm/dịch vụ đúng thời điểm cho khách hàng, vậy nhưng đây vẫn được xem như một loại lãng phí do làm tăng chi phí lưu trữ, quản lý của doanh nghiệp.</p>
            </section>
            <br>
            <section id="section6">
                <h2>Phương pháp ứng dụng để phát huy tối đa hiệu quả của Lean trong doanh nghiệp</h2>
                <p>Tùy vào từng vấn đề muốn giải quyết mà mỗi doanh nghiệp có thể lựa chọn một hay nhiều phương pháp ứng dụng Lean dưới đây:</p>
            </section>
            <br>
            <section id="section6-1">
                <h1>Thiết lập chiến lược mục tiêu rõ ràng</h1>
                <p>Để Lean phát huy tối đa hiệu quả, trước hết, doanh nghiệp cần có mục tiêu rõ ràng và truyền đạt cho nhân sự thấy tầm quan trọng của những yếu tố này. Từ đó, họ sẽ hiểu được vai trò của mô hình sản xuất tinh gọn trong việc giúp tổ chức hoàn thành kế hoạch và chủ động thực hiện.</p>
            </section>
            <br>
            <section id="section6-2">
                <h1>Kiên định với mô hình Lean</h1>
                <p>Các nhà lãnh đạo cấp cao của doanh nghiệp cần thể hiện rõ sự kiên định với mô hình sản xuất tinh gọn qua một số hành vi như truyền đạt tầm nhìn rõ ràng về việc ứng dụng Lean, thường xuyên đến xưởng sản xuất, tự tìm hiểu nguyên nhân gây vấn đề trước khi khiển trách cấp dưới v.vv..</p>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-6.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Nhà quản trị cần thiết lập chiến lược mục tiêu rõ ràng để Lean phát huy hiệu quả</i>
            </section>
            <br>
            <section id="section6-3">
                <h1>Vạch ra chuỗi giá trị từ đầu đến cuối</h1>
                <p>Với việc vạch ra chuỗi giá trị từ đầu đến cuối (nhập nguyên vật liệu thô → giao thành phẩm), nếu được sử dụng đúng cách, phương pháp này sẽ hướng doanh nghiệp tới một lộ trình cải tiến rõ ràng và đơn giản hơn, giúp hạn chế tối đa tình trạng bị xao nhãng hay “lạc đường” trong quy trình sản xuất.</p>
            </section>
            <br>
            <section id="section6-4">
                <h1>Đặt tiêu chuẩn rõ ràng ngay từ đầu</h1>
                <p>Tiêu chuẩn hóa môi trường làm việc cũng như bản thân công việc được xem như nền tảng cốt lõi của mô hình Lean. Theo đó, nhà quản trị có thể lựa chọn quy tắc 5S làm điểm khởi đầu cho phương pháp này. Việc đặt ra những tiêu chuẩn rõ ràng ngay từ lúc này sẽ góp phần ổn định quy trình sản xuất và mang lại chất lượng sản phẩm/dịch vụ nhất quán hơn, từ đó cung cấp cơ sở để thực hiện nhiều cải tiến khác.</p>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-7.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Tiêu chuẩn hóa môi trường làm việc là nền tảng cốt lõi của mô hình Lean</i>
            </section>
            <br>
            <section id="section6-5">
                <h1>Tập trung vào nhóm lãnh đạo tuyến đầu</h1>
                <p><a href="#" class="high-light">Lãnh đạo</a> tuyến đầu là những người có ảnh hưởng lớn nhất về khía cạnh văn hóa trong các mô hình cải tiến như Lean. Không chỉ giữ vai trò giám sát, quản lý, dẫn đầu nhóm v.vv.., họ còn nhận được sự tin tưởng, tín nhiệm và tiếp nhận báo cáo công việc hằng ngày trực tiếp từ nhân viên.</p>
                <p>Chính vì vậy, nhóm đối tượng này cần được cung cấp những công cụ quản lý, đào tạo kỹ năng lãnh đạo và kiến thức về cải tiến để giúp họ có thể tạo ra nhiều “lực đẩy cải tiến” hơn cho nội bộ doanh nghiệp.</p>
            </section>
            <br>
            <section id="section6-6">
                <h1>Phân bổ hợp lý các nguồn lực</h1>
                <p>Một trong những lý do phổ biến khiến các doanh nghiệp ứng dụng không thành công mô hình sản xuất tinh gọn đến từ việc thiếu thốn nguồn lực. Do đó, mặc dù nhân sự tại mọi phòng ban của tổ chức đã phải đảm nhận hàng loạt nhiệm vụ riêng nhưng khi quyết định dùng Lean, nhà quản trị vẫn cần đảm bảo đầy đủ yếu tố này.</p>
                <p>Một số cách thức phân bổ phổ biến thường được nhiều công ty áp dụng có thể kể đến như thuê ngoài đội ngũ chuyên gia, tư vấn, huấn luyện về Lean hay sử dụng công cụ phần mềm giúp tiết kiệm tối đa thời gian, công sức và chi phí.</p>
            </section>
            <section id="section6-7">
                <h1>Sát sao ngay từ quy trình tuyển dụng</h1>
                <p>Bên cạnh những phương pháp kể trên, sát sao ngay từ quy trình tuyển dụng cũng chính là một cách hiệu quả để triển khai thành công mô hình sản xuất tinh gọn mà doanh nghiệp có thể tham khảo.</p>
                <p>Theo nghiên cứu của Hiệp hội Quản lý Nguồn nhân lực, chi phí trung bình để thay thế nhân viên cũ khi họ rời đi mà mỗi tổ chức phải bỏ ra tương đương từ 06 đến 09 tháng lương trả cho nhân viên thông thường. Như vậy, nếu tiến hành kiểm soát chặt chẽ ngay từ bước tuyển dụng ban đầu, nhà quản trị sẽ hạn chế được tối đa <a href="" class="high-light">tỷ lệ nghỉ việc</a> của nhân sự sau này, góp phần tối ưu chi phí cho doanh nghiệp.</p>
                <img
                    src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-8.jpg"
                    alt="" style="width: 100%;height:430px"><br>
                <i>Sát sao quy trình tuyển dụng giúp doanh nghiệp tiết kiệm tối đa chi phí nhân sự</i>
                <p>Với mong muốn có thể cung cấp cho mọi công ty tại Việt Nam công cụ test năng lực ứng viên toàn diện để tiết kiệm thời gian và nâng cao chất lượng nhân sự, Testcenter.vn đã ra đời. Được ứng dụng nền tảng công nghệ hiện đại, Testcenter.vn cho phép nhà quản trị dễ dàng tạo bài kiểm tra online không giới hạn số lượng theo quy trình chuẩn quốc tế.</p>
                <p>Thông qua quá trình tổ chức bài test năng lực, các tổ chức sẽ có thể nhìn nhận một cách chính xác điểm mạnh, điểm yếu cũng như sự phù hợp của ứng viên với doanh nghiệp; từ đó đưa ra lộ trình, phương pháp đào tạo đúng hướng. Không chỉ vậy, hiểu rõ<a href="" class="high-light">ứng viên</a> còn giúp nhà quản trị phân công nhiệm vụ hợp lý, tạo điều kiện để mỗi cá nhân có cơ hội phát huy tối đa khả năng làm việc của mình.</p>
            </section>
            <br>
            <section id="section7">
                <h1>Tổng kết</h1>
                <p>Như vậy, bài viết do Testcenter.vn mang tới ngày hôm nay đã giúp bạn trả lời câu hỏi<b>“Lean là gì?”</b> cùng những lợi ích mà mô hình này mang lại cho doanh nghiệp. Nhìn chung, việc ứng dụng hiệu quả Lean trong thực thế được đánh giá ở mức tương đối khó khăn.</p>
                <p>Chính bởi vậy, nhà quản trị cần phải đưa ra những tiêu chí rõ ràng và hành động nhất quán với sự đoàn kết từ toàn thể nhân viên để giúp Lean phát huy hiệu quả một cách tối đa nhất!</p>
                <p><b>TestCenter.vn – Nền tảng đánh giá năng lực nhân sự cung cấp giải pháp test online dành cho doanh nghiệp Việt Nam. TestCenter.vn với ngân hàng 300+ đề thi tuyển dụng nhân sự mẫu hỗ trợ quy trình đánh giá năng lực nhân sự. Tự hào đồng hành cùng +500 khách hàng doanh nghiệp hàng đầu như Honda, Sailun, Petrolimex, Ngân hàng TMCP Hàng Hải Việt Nam (MSB),…</b></p>
                <p><b>Doanh nghiệp sẽ tiết kiệm được 30% chi phí so với cách tuyển dụng truyền thống khi sử dụng Testcenter. Vui lòng <a href="" class="highlight">ĐĂNG KÝ TẠI ĐÂY</a> để nhận tư vấn 1-1 về các tính năng của Nền tảng đánh giá năng lực nhân sự TestCenter</b></p>
            </section>
            <br>
            <div class="end-first">
                <div class="tag">
                    TAGS
                </div>
                <button type="button" class="btn btn-outline-secondary">lean là gì
                </button>
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
            <div class="card-main-footer">
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
                    {
                        summary: "Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết cân bằng",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-218x150.jpg"
                    },
                    {
                        summary: "Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị cần biết",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Tuyển Mass là gì? Nguyên tắc vàng để tuyển Mass hiệu quả",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/03/tuyen-mass-la-gi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Bonding là gì? Mở “khóa” các hoạt động gắn kết tình đồng đội",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/bonding-la-gi-testcenter-1-218x150.jpg"
                    },
                    {
                        summary: "Revenue Stream là gì? Phương pháp tăng trưởng dòng doanh",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/revenue-stream-la-gi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Pricing strategy là gì? Có bao nhiêu chiến lược giá?",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/chienluocgialagi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "06 cách giải quyết mâu thuẫn trong nội bộ doanh nghiệp dành cho nhà quản lý",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/cachgiaiquyetmauthuan-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Flowchart là gì? Cách ứng dụng Flowchart vào quy trình tuyển dụng hiệu quả",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/flowchart-la-gi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Quan tâm là gì? 10 cách quan tâm nhân viên mới nhất",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/quan-tam-la-gi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Phẩm chất là gì? 8 phẩm chất cần có của nhân viên khi đánh giá",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/pham-chat-la-gi-testcenter-218x150.jpg"
                    },
                    {
                        summary: "Ma trận 9 Box Grid – Đánh giá và phát triển nhân viên hiệu quả",
                        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/11/ma-tran-9-box-grid-testcenter-218x150.jpg"
                    }
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

                document.getElementById('prevBtn').addEventListener('click', function () {
                    if (currentPage > 1) {
                        currentPage--;
                        displayArticles(currentPage);
                        updateButtons();
                    }
                });

                document.getElementById('nextBtn').addEventListener('click', function () {
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
