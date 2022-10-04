<script>
    $(document).ready(function() {
        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next, today',
                center: 'title',
                right: 'month,basicWeek,basicDay',
            },
            // weekends: false ,//ẩn cuối tuần
            navLinks: true, // có thể nhấm vào tên ngày để xem sự kiện cả ngày
            // businessHours: true, // hiển thị giờ làm việc
            editable: false, //cho phép thay đổi
            eventColor: '#378006', //màu sự kiện
            dayMaxEvents: true, // cho phép liên kết "thêm" khi có quá nhiều sự kiện
            events: "Sql/show-event.php",
            //dữ liệu sql vào carlendar
            hiddenDays: [0], //bỏ ngày chủ nhật
            eventMouseover: function(events, jsEvent) {//sự kiện di chuột vào
                var tooltip = '<div class="tooltipevent" style="width:200px;height:80px;background: #EEE5E5;position:absolute;z-index:10001;">' + events.description + '</div>';
            //gọi biến tooltip thẻ div kích thước bằng code html lấy dữ liệu description trong mảng events 
                $("body").append(tooltip);//hiển thị ra biến tooltip
                $(this).mouseover(function(e) {
                    $(this).css('z-index', 10000);  
                    $('.tooltipevent').fadeIn('500');
                    $('.tooltipevent').fadeTo('10', 1.9);
                }).mousemove(function(e) { 
                    $('.tooltipevent').css('top', e.pageY + 10);
                    $('.tooltipevent').css('left', e.pageX + 20);
                });
            },

            eventMouseout: function(events, jsEvent) {//sự kiện di chuột ra ngoài 
                $(this).css('z-index', 8);
                $('.tooltipevent').remove();//xóa biến tooltip
            },
        });
    });
</script>
<div class="response"></div>
<div id='calendar'></div>