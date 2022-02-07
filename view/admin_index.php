<script>
    function find_text1()
    {
        form1.action="/~team1/admin?year=" + form1.year.value + '&&month=' + form2.month.value;
        form1.submit();
    }

    $(function() {
        $('#text1') .datetimepicker({
            locale: 'ko',
            format: 'YYYY',
            viewMode: 'years',
            defaultDate: moment()
        });
        $("#text1") .on("dp.change", function (e) {
            find_text1();
        });
    });

    $(function() {
        $('#text2') .datetimepicker({
            locale: 'ko',
            format: 'MM',
            viewMode: 'months',
            defaultDate: moment()
        });
        $("#text2") .on("dp.change", function (e) {
            find_text1();
        });
    });


    $( document ).ready(function (){
        //area 차트
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
              datasets: [{
                  label: "매출",
                  lineTension: 0.3,
                  backgroundColor: "rgba(78, 115, 223, 0.05)",
                  borderColor: "#e6ac00",
                  pointRadius: 3,
                  pointBackgroundColor: "#b38600",
                  pointBorderColor: "#b38600",
                  pointHoverRadius: 3,
                  pointHoverBackgroundColor: "#b38600",
                  pointHoverBorderColor: "#b38600",
                  pointHitRadius: 10,
                  pointBorderWidth: 2,
                  data: [<?=$area_chart_data?>],
              }],
          },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return '$' + number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ' : ' + number_format(tooltipItem.yLabel) + ' KRW';
                        }
                    }
                }
            }
        });

        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
                datasets: [{
                    label: "예약 팀",
                    backgroundColor: "#cc9900",
                    hoverBackgroundColor: "#b38600",
                    borderColor: "#4e73df",

                    data: [<?=$area_bar_data['c1_meal']?>,<?=$area_bar_data['c2_meal']?>,
                        <?=$area_bar_data['c3_meal']?>,<?=$area_bar_data['c4_meal']?>,
                        <?=$area_bar_data['c5_meal']?>,<?=$area_bar_data['c6_meal']?>,
                        <?=$area_bar_data['c7_meal']?>,<?=$area_bar_data['c8_meal']?>,
                        <?=$area_bar_data['c9_meal']?>,<?=$area_bar_data['c10_meal']?>,
                        <?=$area_bar_data['c11_meal']?>,<?=$area_bar_data['c12_meal']?>,],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        },
                        maxBarThickness: 25,
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return  number_format(value) + ' 팀';
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ' : ' + number_format(tooltipItem.yLabel)+' 팀';
                        }
                    }
                },
            }
        });

        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["VIP Room", "Premier Room", "Premier Induk Room" , "Deluxe Suite Room", "Korean Suite Room", "Royal Suite Room"],
                datasets: [{

                    data: [<?=$area_pie_data['no_room1']?>,<?=$area_pie_data['no_room2']?>,
                        <?=$area_pie_data['no_room3']?>,<?=$area_pie_data['no_room4']?>,
                        <?=$area_pie_data['no_room5']?>,<?=$area_pie_data['no_room6']?>,],
                    backgroundColor: ['#b38600', '#e6ac00', '#ffc61a', '#ffd24d', '#ffdf80' , '#ffecb3'],
                    hoverBackgroundColor: ['#997300', '#cc9900', '#ffbf00', '#ffcc33', '#ffd966'],
                    hoverBorderColor: "#ffffff",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });


    });


    function number_format(number, decimals, dec_point, thousands_sep) {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }

</script>

<!-- Begin Page Content -->
<div class="container-fluid" style="width: 2530px">
	
    <!-- Content Row -->
    <div class="row" style="padding-left:20px">
        <div class="col-xl-8 col-lg-7">
            <div class="row">
            <!-- Area Chart -->
            <div class="card shadow mb-4" style="width: 50%">
                <div class="card-header py-3" style="background: #e6ac00">
                    <h6 class="m-0 font-weight-bold text-dark">월간 매출 현황</h6>
                </div>
                <div class="card-body" style="background: #fffdf3">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    <hr>

                </div>
            </div>
                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3" style="background: #e6ac00">
                            <h6 class="m-0 font-weight-bold text-dark" ><?php echo($month)?>월 객실 예약 현황</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body" style="background: #fffdf3">
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <hr>
                            <!--탑바 달력 컨트롤-->
                                    <form name="form2" method="post" action="">
                                        <div class="row">
                                            <div class="col-12" align="left">
                                                <div class="form-inline">
                                                    <div class="input-group input-group-sm table-sm date" id="text2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">월</span>
                                                        </div>
                                                        <input type="text" name="month" class="form-control" size="9" value="<?=$month; ?>" onKeydown="if (event.keyCode == 13) { find_text1(); }" >
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <div class="input-group-addon">
                                                                    <i class="far fa-calendar-alt fa-lg">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
           
            <!-- Bar Chart -->
            <div class="card shadow mb-4" style="width: 83%">
                <div class="card-header py-3" style="background: #e6ac00">
                    <h6 class="m-0 font-weight-bold text-dark">월간 레스토랑 예약 현황</h6>
                </div>
                <div class="card-body" style="background: #fffdf3">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->