@extends('layout.resources')
@section('main')
    <div class="container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tin tức</a>
        </div>
        <div class="first-title">
            <a class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 10%;">Tin tức</a>
            <h3>Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết cân bằng</h3>
            <h6>Bởi <b>Testcenter</b> - April 24, 2024</h6>
            <div class="button-inform">
                <a type="button" class="btn btn-primary"><i class="fa-brands fa-facebook-f"></i></a>
                <a type="button" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                <a type="button" class="btn btn-success"><i class="fa-brands fa-pinterest-p"></i></a>
                <a type="button" class="btn btn-danger"><i class="fa-brands fa-whatsapp"></i></a>
                <a type="button" class="btn btn-warning"><i class="fa-brands fa-linkedin-in"></i></a>
                <a type="button" class="btn btn-dark"><i class="fa-brands fa-tumblr"></i></a>
            </div>
            <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1.jpg"
                 alt="" style="width: 100%;height:430px"><br>
            <em>Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý. Nhưng với sự “dẫn
                đường” của học thuyết Equity Theory, nhiều nhà quản lý có thể sẽ bớt “nặng gánh” trong công việc và vận
                hành doanh nghiệp hiệu quả hơn. Vậy cụ thể <a href="#" class="high-light">Equity Theory</a> là gì và làm
                thế nào để ứng dụng lý thuyết này hiệu quả khi quản trị doanh nghiệp? Hãy cùng <a href="{{route('index')}}"
                                                                                                  class="high-light">Testcenter</a>
                tìm hiểu về “bí quyết” đặc biệt này ngay sau đây. </em>

            <div class="toc-wrapper">
                <div class="name"><h5>Table of Contents</h5>
                    <div class="icon" onclick="toggleContent()">☰</div>
                </div>
                <!-- Table of Contents -->
                <div class="toc" id="toc">
                    <ul>
                        <li><a href="#section1">1. Equity Theory là gì?</a></li>
                        <li><a href="#section2">2. Nội dung tổng quát của học thuyết cân bằng</a>
                        </li>
                        <li><a href="#section3">3. Tìm hiểu về tâm lý của nhân viên theo Equity Theory</a></li>
                        <li><a href="#section4">4. Yếu tố để đánh giá nhân viên dựa theo Equity Theory</a></li>
                        <li><a href="#section5">5. Ưu điểm và nhược điểm của học thuyết cân bằng</a>
                        <ul>
                            <li><a href="#section5-1">5.1 Ưu điểm</a></li>
                            <li><a href="#section5-2">5.2 Nhược điểm</a></li>
                        </ul>
                        </li>
                        <li><a href="#section6">6. Hướng dẫn tạo động lực cho nhân viên bằng việc áp dụng học thuyết cân bằng</a>
                            <ul>
                                <li><a href="#section6-1">Đặt mục tiêu rõ ràng</a></li>
                                <li><a href="#section6-2">Đúng người đúng việc</a></li>
                                <li><a href="#section6-3">Thưởng phạt hợp lý</a></li>
                            </ul>
                        </li>
                        <li><a href="#section7">7. Tổng kết</a></li>
                    </ul>
                </div>
            </div>
            <!-- Content Sections -->
            <section id="section1">
                <h2>Equity Theory là gì?</h2>
                <p><b>Equity Theory</b> là gì luôn là câu hỏi đầu tiên cần phải giải đáp, bởi khi nghe đến một học thuyết quản trị nào đó, mọi người cũng đều cho rằng nó rất khó hiểu. Kỳ thực, Equity vô cùng dễ hiểu. John Stacey Adams, một nhà tâm lý học hành vi đã cho ra đời lý thuyết này vào năm 1963. Thuyết này hiểu đơn giản là thuyết động viên nhân viên, nó cũng đưa ra các yếu tố mang tính biến đổi tập trung vào nhân viên, xem xét tác động về sự đánh giá của nhân viên trong công việc cũng như doanh nghiệp họ đang làm.
                </p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>John Stacey Adams – Người đưa ra thuyết Equity</i>
                <p>Cụ thể, John Stacey Adams – “cha đẻ” của lý thuyết này cho rằng: “Được đối xử công bằng luôn là mong muốn của mọi con người. Bởi vậy, nhân viên có xu hướng tự đánh giá xem mình có được đối xử công bằng không. Trong công việc họ sẽ tự so sánh công sức mà mình bỏ ra so với những thứ nhận được có tương xứng không và so với đồng nghiệp có chênh lệch ra sao”</p>
            </section>
            <br>
            <section id="section2">
                <h2>Nội dung tổng quát của học thuyết cân bằng</h2>
                <p>Phát biểu của John Stacy Adams về Thuyết cân bằng Equity Theory như sau: Nhân viên (người lao động) sẽ luôn không ngừng so sánh nỗ lực của họ trong công việc với những gì họ nhận lại được sau khi hoàn thành, và họ còn so sánh điều này với nhân viên khác. </p>
                <p>Nhân viên thường so sánh dựa trên cơ sở về thù lao nhận được, phúc lợi công ty với công sức, nỗ lực họ bỏ ra như kiến thức, thời gian và thái độ làm việc. Khi nhận thấy tỉ lệ ngang nhau, nhân viên hoàn toàn không bất mãn và duy trình năng suất làm việc ổn định. Nhưng ngược lại, tỉ lệ so sánh này bị lệch đi kiểu như nhân viên bỏ nhiều thời gian làm mà lương thưởng ít, họ sẽ có phản ứng tiêu cực, năng suất giảm đi. Nếu họ lại so sánh được thêm là đồng nghiệp làm ít hơn mà lương cao hơn thì phản ứng còn gay gắt nữa.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-3.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>Equity cho thấy nhân viên luôn luôn so sánh những gì mình bỏ ra và nhận lại</i>
                <p>Đương nhiên cái nhìn đều mang tính chủ quan từ phía nhân viên chứ không phải là sự đánh giá công bằng chính xác. Chính vì thế doanh nghiệp luôn phải là bên đưa ra giải pháp xử lý phù hợp nếu cán cân bị lệch. Tránh tình trạng nhân viên hiểu lầm, bất mãn ảnh hưởng đến kết quả hoạt động kinh doanh của doanh nghiệp.</p>
            </section>
            <br>
            <section id="section3">
                <h2>Tìm hiểu về tâm lý của nhân viên theo Equity Theory</h2>
                <p>Tâm lý của nhân viên được chứng minh trong Equity Theory là tâm lý so sánh. Lý thuyết của John Stacy Adams đã chỉ ra được một sự thật ngầm hiểu trong lòng người lao động hay nhân viên của công ty. Tâm lý so sánh luôn tồn tại trong mỗi người điều này đã được Equity diễn giải một cách rõ ràng hơn. Và cái tâm lý này của nhân viên sẽ tác động đến hành vi của họ, hành vi đó lại ảnh hưởng trực tiếp đến hiệu quả công việc. </p>
                <p>Hãy thử tưởng tượng, nếu cùng làm chung 1 nơi mà bạn phải làm việc nhiều, lương ít còn đồng nghiệp làm việc ít lương cao, còn quản lý thì lại cho rằng như vậy là hợp lý rồi. Họ còn cho rằng công việc của đồng nghiệp thì quan trọng hơn và xứng đáng nhận lương cao hơn bạn. Như vậy, từ việc so sánh dẫn đến tâm lý bất mãn, cảm thấy không công bằng. Điều này dẫn đến một loạt các suy nghĩ và hành vi tiêu cực, nhẹ thì buông xuôi, năng suất giảm, hiệu quả cv kém đi. Nặng thì bôi xấu công ty, đồng nghiệp và xin thôi việc hoặc phá hoại công ty. </p>
                <p><b>Doanh nghiệp sẽ tiết kiệm được 30% chi phí so với cách tuyển dụng truyền thống khi sử dụng
                        Testcenter. <a href="">Vui lòng ĐĂNG KÝ TẠI ĐÂY</a> để nhận tư vấn 1-1 về các tính năng của Nền
                        tảng đánh giá năng lực nhân sự TestCenter</b></p>
                <p>>>><i><span class="bolder">Xem thêm:</span><a href="" class="high-light"> Bí quyết tối ưu hóa hiệu suất làm việc</a></i></p>
            </section>
            <br>
            <section id="section4">
                <h2>Yếu tố để đánh giá nhân viên dựa theo Equity Theory</h2>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-4.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>Yếu tố đầu vào và đầu ra là cơ sở của Equity Theory</i>
                <p>Equity Theory không chỉ phát biểu về tâm lý so sánh của nhân viên, nó còn được dùng để đánh giá và tìm phương án cải thiện hiệu quả làm việc của nhân viên. Quản lý cần nắm rõ lý thuyết này để điều phối các hoạt động trong bộ phận của mình tốt hơn. Dưới đây là những yếu tố đầu vào và đầu ra mà các nhân viên thường áp dụng để tự so sánh, và đây là thứ quản lý cần biết để kịp thời đưa ra thông tin đúng đắn, giúp nhân viên hiểu mình không bị đối xử bất công.</p>
                <p><b>Các yếu tố input đầu vào:</b></p>
                <ul>
                    <li>Sự chăm chỉ, nỗ lực và sự cam kết gắn bó cùng lòng trung thành của nhân viên với tổ chức.</li>
                    <li>Khả năng thích ứng với những kỹ năng chuyên môn và kiến thức nhân viên có để làm tốt công việc được giao.</li>
                    <li>Mức độ khó khăn của công việc mà nhân viên đang đảm nhận. </li>
                    <li>Nhân viên sẽ phải hy sinh điều gì để thực hiện tốt công việc, hay họ có được đồng nghiệp và cấp trên hỗ trợ không.</li>
                    <li>Đặc biệt là sự công nhận của cấp trên và đồng nghiệp xung quanh đối với nhân viên.</li>
                    <li>Thái độ với công việc như ý chí quyết tâm, sự nhiệt tình trong công việc. </li>
                </ul>
                <p><b>Các yếu tố đầu ra output:</b></p>
                <p>Với những sự “cống hiến” kể trên thì nhân viên sẽ nhận lại được điều gì đáp lại?</p>
                <ul>
                    <li>Về vật chất đó là tiền và lợi ích: Khoản này bao gồm lương thưởng, phụ cấp, hoa hồng, ưu đãi và phúc lợi dành cho họ. </li>
                    <li>Về tinh thần: Gồm khen thưởng hay sự công nhận của mọi người xung quanh. </li>
                    <li>Và quan trọng nhất là công việc có thể giúp nhân viên thăng tiến trong sự nghiệp ở mức độ nào.</li>
                </ul>
                <p>>>><i><span class="bolder">Xem thêm:</span><a href="" class="high-light"> Bí quyết tối ưu hóa hiệu suất làm việc</a></i></p>
            </section>
            <br>
            <section id="section5">
                <h2>Ưu điểm và nhược điểm của học thuyết cân bằng</h2>
                <p>Bất kể một học thuyết nào dù chỉ ra điểm có lợi ra sao, thì cũng có hai mặt ưu và nhược. Nhà quản lý có thể cân nhắc các ưu nhược điểm của Equity để áp dụng quản trị doanh nghiệp sao cho hợp lý</p>
                <h1>Ưu điểm</h1>
                <p>Sau đây là 4 ưu điểm cơ bản nhất mà học thuyết Equity mang đến cho doanh nghiệp cũng như các nhà quản lý:</p>
                <ul>
                    <li>Tạo động lực làm việc – Tối ưu hóa nguồn lực</li>
                </ul>
                <p>Thuyết cân bằng của John Stacy Adams đã nêu lên sự phù hợp giữa kỳ vọng của doanh nghiệp và hiệu suất làm việc của nhân viên. Nó cho thấy để doanh nghiệp vận hành hiệu quả, cần phải tạo được môi trường công bằng lành mạnh cho nhân viên. Người nhân viên nhận được đền đáp xứng đáng với công sức và nỗ lực bỏ ra sẽ luôn cảm thấy vui vẻ. Từ đó họ có động lực tiếp tục cống hiến vì biết mình sẽ được nhận lại xứng đáng. Và cũng chính nhờ điều này, nhân viên làm việc hết khả năng tạo ra năng suất cao, hiệu quả tốt cho mọi công việc được giao.</p>
                <ul>
                    <li>Giữ chân nhân viên lâu năm và thu hút nhân tài mới</li>
                </ul>
                <p>Chẳng ai thích làm việc ở một nơi mà mình luôn bị thiệt, học thuyết Equity sẽ giúp nhà quản lý đánh giá được cán cân công bằng trong công việc. Doanh nghiệp kịp thời nhận ra mình có đang thiên lệch hay chưa công bằng trong việc hay không để điều chỉnh sẽ giúp nhân viên hài lòng hơn, giảm bất mãn và tiếp tục cố gắng làm việc. Đồng thời với môi trường luôn có sự công bằng và đãi ngộ xứng đáng sẽ thu hút nhiều nhân tài muốn gia nhập tổ chức.</p>
                <p>>>><i><span class="bolder">Xem thêm:</span><a href="" class="high-light"> Cách thu hút nhân tài đến với doanh nghiệp</a></i></p>
                <ul>
                    <li>Tiết kiệm chi phí tuyển nhân viên mới và gia tăng lợi nhuận: </li>
                </ul>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-6.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>Equity giữ chân được nhân viên thì cũng giúp tiết kiệm chi phí tuyển dụng</i>
                <p>Một chế độ đãi ngộ không công bằng thì nhân viên không gắn bó, mà không gắn bó thì công ty mất thêm phí tuyển dụng, đào tạo, v.vv.. Bởi vậy nên có thể thấy áp dụng được thuyết công bằng khi quản lý còn có thêm một lợi ích to lớn là tiết kiệm chi phí cho doanh nghiệp. Đồng thời với sự đãi ngộ tốt, năng suất hiệu quả làm việc của nhân viên tăng giúp công ty phát triển tốt hơn, gia tăng lợi nhuận. </p>
                <ul>
                    <li>Tạo ra môi trường không ganh đua tiêu cực xây văn hóa lành mạnh</li>
                </ul>
                <p>Môi trường công bằng, đãi ngộ tốt sẽ giảm bớt sự cạnh tranh trong công việc xây dựng văn hóa doanh nghiệp lành mạnh. Các nhân viên sẽ thoải mái với nhau hơn, khi lợi ích của ai cũng được đảm bảo họ sẽ cùng nhau nỗ lực để đưa doanh nghiệp phát triển lớn mạnh hơn. </p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-7.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>Chủ quan, tương đối và dễ bỏ sót là những hạn chế lớn của Equity</i>
            </section>
            <br>
            <section id="#section5-2">
                    <h2>Nhược điểm</h2>
                    <p>Ngoài những lợi ích, học thuyết cân bằng cũng đối mặt với một số điểm hạn chế:</p>
                <ul>
                    <li><b>Mỗi người một ý</b></li>
                </ul>
                <p>Không nhân viên nào giống nhân viên nào, họ sẽ có những kỳ vọng và tiêu chuẩn riêng.Do đó, khi đối mặt với cùng một công việc và mức thù lao, sẽ xuất hiện sự chênh lệch trong cách họ đánh giá đồng nghiệp hoặc cấp trên. Vậy nên khó mà xây dựng được một khung tiêu chuẩn chung để mà cân bằng.</p>
                <ul>
                    <li><b>So sánh còn chủ quan tương đối</b></li>
                </ul>
                <p>Không có số liệu cụ thể nào để nhân viên hay doanh nghiệp đong đếm thật công bằng. Và lợi ích với hiệu suất của nhân viên phụ thuộc vào nhiều yếu tố như độ khó của công việc, chênh lệch về kiến thức, v.vv.. Bởi vậy khi đo lường đúng tỉ lệ giữa đầu vào và đầu ra trở nên khó khăn để có thể áp dụng được thuyết này. </p>
                <ul>
                    <li><b>Bỏ qua yếu tố quan trọng</b></li>
                </ul>
                <p>Thuyết cân bằng tập trung vào các yếu tố đầu vào và đầu ra trong quá trình đánh giá, nhưng nó không thể bao quát tất cả các yếu tố quan trọng. Điều này có thể tác động đến quá trình đánh giá và quản lý, bởi với mỗi doanh nghiệp hay các loại hình, hạng mục công việc khác nhau sẽ có những yếu tố đầu vào đầu ra riêng biệt.</p>
            </section>
            <br>
            <section id="section6">
                <h2>Hướng dẫn tạo động lực cho nhân viên bằng việc áp dụng học thuyết cân bằng</h2>
                <p>Học thuyết cân bằng Equity đem đến nhiều lợi ích và hạn chế, xong nó vẫn là một công cụ tốt để tạo động lực cho nhân viên, thúc đẩy hiệu quả công việc chung. Sau đây là một số cách áp dụng học thuyết này mà các nhà quản lý nên tham khảo.</p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-8.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>Tạo động lực cho nhân viên bằng Equity sẽ rất hiệu quả</i>
            </section>
            <br>
            <section id="section6-1">
                <h1>Đặt mục tiêu rõ ràng</h1>
                <p>Làm việc gì cũng phải có mục tiêu cụ thể, đích đến rõ ràng, bởi vậy rất cần đưa ra chi tiết khung xác định trước các input và output về kỳ vọng của nhân viên. Đưa ra được khung này nhân viên sẽ biết những mốc mình cần đạt tới, doanh nghiệp thì theo dõi được sự tăng trưởng của nhân viên và có chế độ đãi ngộ tương xứng nhất. </p>
            </section>
            <br>
            <section id="section6-2">
                <h1>Đúng người đúng việc</h1>
                <p>Nhà quản lý cần phải hiểu được năng lực cụ thể của nhân viên, phân công đúng việc hợp khả năng của họ. Từ đó mới có cơ sở để nhân viên kỳ vọng đúng đắn đồng thời quản lý đưa ra được cơ chế phù hợp. Chẳng hạn một thiết kế giỏi làm ảnh quảng cáo lại đưa vào công việc thiết kế web thì dễ khiến nhân viên bị chán nản, nỗ lực rất nhiều nhưng so với thiết kế chuyên cũng vẫn không bằng. Nhân viên nản còn doanh nghiệp không thu được kết quả tốt và có muốn trao thưởng thì cũng không hợp lý.</p>
                </section>
            <br>
            <section id="section6-3">
                <h1>Lương 3P</h1>
                <p>Quá trình xác định tiền lương cho nhân viên nên dựa trên ba yếu tố chính: vị trí công việc, năng lực cá nhân và thành tựu đạt được. Điều này giúp tạo nên một giải pháp tính lương mang lại sự cân bằng giữa đầu vào và đầu ra một cách khách quan nhất. Hệ thống này giúp nhân viên nhận được đúng giá trị của công sức và đóng góp mà họ mang lại cho doanh nghiệp, không phải dựa trên các tiêu chuẩn thị trường. Như thế nhân viên biết mình làm ở vị trí gì, công việc ra sao năng lực thế nào và đạt được gì nên mới có lương thế, họ sẽ thất công bằng hơn.</p>
            </section>
            <br>
            <section id="section6-4">
            <h1>Thưởng phạt hợp lý</h1>
                <p>Việc doanh nghiệp truyền đạt thông tin về hệ thống khen thưởng và phê bình nội bộ không chỉ mang lại hiệu quả mà còn là một biện pháp rất có ý nghĩa. Điều này tạo ra động lực mạnh mẽ cho nhân viên học tập những cá nhân xuất sắc vinh danh. Quan trọng hơn là, việc tôn vinh những nỗ lực, sự tiến bộ và thành tích của nhân viên không chỉ cổ vũ họ cống hiến hơn mà còn tạo ra lòng trung thành với doanh nghiệp. Do đó, chế độ khen ngợi và đối đãi hấp dẫn không chỉ là nguồn động viên chính, mà còn là đòn bẩy quan trọng để thúc đẩy nhân viên nỗ lực và góp phần tăng cường hiệu suất làm việc.</p>
            </section>
            <br>
            <section id="section7">
                <h2>Tổng kết</h2>
                <p>Nhìn chung áp dụng được học thuyết cân bằng sẽ giúp từng cá nhân trong tổ chức hài lòng và như vậy sẽ thúc đẩy cả tổ chức phát triển. Tuy nhiên, như đã nói ở trên để đưa ra được một khung kỳ vọng của nhân viên các nhà quản lý cũng phải nắm rõ năng lực người đó ở khoảng nào để phân tích kỳ vọng và làm thỏa mãn nó. </p>
                <img src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-10.jpg"
                     alt="" style="width: 100%;height:430px"><br>
                <i>Đánh giá năng lực nhân viên giúp doanh nghiệp áp dụng Equity dễ dàng hơn</i>
                <p>Việc đánh giá năng lực có thể diễn ra khi mới tuyển dụng hoặc định kỳ khi nhân viên đã làm việc một khoảng thời gian nhất định. Đánh giá những kỹ năng chuyên môn của nhân viên ở mức độ nào, có phù hợp với vị trí hiện tại hay không, không chỉ giúp doanh nghiệp phân loại nhân viên sắp xếp công việc, mà còn giúp xác định điểm kỳ vọng tương xứng với năng lực, kỹ năng để áp dụng thuyết cân bằng.</p>
                <p>Những lúc như vậy, một giải pháp đánh giá năng lực hiệu quả như Testcenter sẽ là sự lựa chọn hoàn hảo dành cho các nhà quản lý. Testcenter sở hữu công cụ tạo bài test năng lực online nhanh chóng, kết hợp với “ngân hàng” hơn 300 đề thi mẫu được thiết kế khoa học, sẽ giúp đánh giá năng lực nhân sự một cách nhanh chóng và chính xác nhất. Ngoài ra, các nhà quản lý doanh nghiệp còn có thể theo dõi kết quả cụ thể thông qua hệ thống báo cáo trực quan với các số liệu chi tiết trên nền tảng Testecenter. Nhờ những báo cáo trực quan đó, nhà quản lý dễ dàng nắm được khả năng của các nhân viên ở mức độ nào để áp dụng được các mô hình cũng như lý thuyết quản trị phù hợp, giúp doanh nghiệp ngày càng phát triển mạnh mẽ. Với Testcenter – Nền tảng đánh giá năng lực nhân sự hàng đầu Việt Nam, hành trình thấu hiểu nhân viên, phát triển doanh nghiệp sẽ dễ dàng hơn bao giờ hết, hãy truy cập <b>Testcenter</b> để tìm hiểu thêm thông tin chi tiết nhé!</p>
                <p><b>TestCenter.vn – Nền tảng đánh giá năng lực nhân sự cung cấp giải pháp test online dành cho doanh nghiệp Việt Nam. TestCenter.vn với ngân hàng 300+ đề thi tuyển dụng nhân sự mẫu hỗ trợ quy trình đánh giá năng lực nhân sự. Tự hào đồng hành cùng +500 khách hàng doanh nghiệp hàng đầu như Honda, Sailun, Petrolimex, Ngân hàng TMCP Hàng Hải Việt Nam (MSB),…</b></p>
                <p><b>Doanh nghiệp sẽ tiết kiệm được 30% chi phí so với cách tuyển dụng truyền thống khi sử dụng Testcenter. <a href="" class="highlight">Vui lòng ĐĂNG KÝ TẠI ĐÂY</a> để nhận tư vấn 1-1 về các tính năng của Nền tảng đánh giá năng lực nhân sự TestCenter</b></p>
            </section>
            <div class="end-first">
                <div class="tag">
                    TAGS
                </div>
                <button type="button" class="btn btn-outline-primary">equity là gì
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
                    <a href="#" style="font-size: 15px">Tuyển Mass là gì? Nguyên tắc vàng để tuyển Mass hiệu quả</a>
                </div>
                <div class="right-new w-10 text-end">
                    <span class="next-button">Bài tiếp theo</span><br>
                    <a href="#" style="font-size: 15px">Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp</a>
                </div>
            </div>
            <div class="button-inform">
                <button type=button class=" btn btn-primary">Bài viết mới nhất</button>
                <button type=button class=" btn btn-outline-secondary">Xem thêm</button>
            </div>
            <hr class="line">
            <div class="card-main-footer">
                <div class="card-body-footer flex-md-row" id="articleContainer">
                </div>
            </div>
            <div class="next-button">
                <button id="prevBtn">&larr;</button>
                <button id="nextBtn">&rarr;</button>
            </div>
            <script src="{{asset('js/data.js')}}"></script>
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
