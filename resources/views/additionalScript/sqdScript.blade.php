<script>
    // Get the canvas element
    var ctx = $('#myChart').get(0).getContext('2d');
    var myChart;

    // Define data
    var data = {
        labels: ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree'],
        datasets: [{
            label: 'SQD0',
            backgroundColor: 'rgba(0, 0, 0, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            data: [
                {{ $sqd0->strongly_disagree_count }},
                {{ $sqd0->disagree_count }},
                {{ $sqd0->neutral_count }},
                {{ $sqd0->agree_count }},
                {{ $sqd0->strongly_agree_count }}
            ]
        }, {
            label: 'SQD1',
            backgroundColor: 'rgba(255, 192, 203, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd1->strongly_disagree_count }},
                {{ $sqd1->disagree_count }},
                {{ $sqd1->neutral_count }},
                {{ $sqd1->agree_count }},
                {{ $sqd1->strongly_agree_count }}
            ]
        }, {
            label: 'SQD2',
            backgroundColor: 'rgba(0, 0, 255, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd2->strongly_disagree_count }},
                {{ $sqd2->disagree_count }},
                {{ $sqd2->neutral_count }},
                {{ $sqd2->agree_count }},
                {{ $sqd2->strongly_agree_count }}
            ]
        }, {
            label: 'SQD3',
            backgroundColor: 'rgba(255, 255, 0, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd3->strongly_disagree_count }},
                {{ $sqd3->disagree_count }},
                {{ $sqd3->neutral_count }},
                {{ $sqd3->agree_count }},
                {{ $sqd3->strongly_agree_count }}
            ]
        }, {
            label: 'SQD4',
            backgroundColor: 'rgba(0, 255, 0, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd4->strongly_disagree_count }},
                {{ $sqd4->disagree_count }},
                {{ $sqd4->neutral_count }},
                {{ $sqd4->agree_count }},
                {{ $sqd4->strongly_agree_count }}
            ]
        }, {
            label: 'SQD5',
            backgroundColor: 'rgba(128, 128, 128, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd5->strongly_disagree_count }},
                {{ $sqd5->disagree_count }},
                {{ $sqd5->neutral_count }},
                {{ $sqd5->agree_count }},
                {{ $sqd5->strongly_agree_count }}
            ]
        }, {
            label: 'SQD6',
            backgroundColor: 'rgba(255, 165, 0, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd6->strongly_disagree_count }},
                {{ $sqd6->disagree_count }},
                {{ $sqd6->neutral_count }},
                {{ $sqd6->agree_count }},
                {{ $sqd6->strongly_agree_count }}
            ]
        }, {
            label: 'SQD7',
            backgroundColor: 'rgba(0, 128, 128, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd7->strongly_disagree_count }},
                {{ $sqd7->disagree_count }},
                {{ $sqd7->neutral_count }},
                {{ $sqd7->agree_count }},
                {{ $sqd7->strongly_agree_count }}
            ]
        }, {
            label: 'SQD8',
            backgroundColor: 'rgba(139, 69, 19, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $sqd8->strongly_disagree_count }},
                {{ $sqd8->disagree_count }},
                {{ $sqd8->neutral_count }},
                {{ $sqd8->agree_count }},
                {{ $sqd8->strongly_agree_count }}
            ]
        }]
    };
    // Configure options
    var options = {

    };
    // Create the chart
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });

    // Automatically submit the form after selecting a year
    $('#select').change(function() {
        $('#yearForm').submit();
    });
    // AJAX if the user select a specific year
    $('#yearForm').submit(function(event) {
        event.preventDefault();
        var formData = $('#select').val();
        $.ajax({
            url: 'http://localhost:8000/feedback-admin/public/dashboard/sqd?year=' +
                formData,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                // Handle successful response
                var stronglyDisagreeTotal =
                    parseInt(response[0]?.strongly_disagree_count || 0) +
                    parseInt(response[1]?.strongly_disagree_count || 0) +
                    parseInt(response[2]?.strongly_disagree_count || 0) +
                    parseInt(response[3]?.strongly_disagree_count || 0) +
                    parseInt(response[4]?.strongly_disagree_count || 0) +
                    parseInt(response[5]?.strongly_disagree_count || 0) +
                    parseInt(response[6]?.strongly_disagree_count || 0) +
                    parseInt(response[7]?.strongly_disagree_count || 0) +
                    parseInt(response[8]?.strongly_disagree_count || 0);
                var disagreeTotal =
                    parseInt(response[0]?.disagree_count || 0) +
                    parseInt(response[1]?.disagree_count || 0) +
                    parseInt(response[2]?.disagree_count || 0) +
                    parseInt(response[3]?.disagree_count || 0) +
                    parseInt(response[4]?.disagree_count || 0) +
                    parseInt(response[5]?.disagree_count || 0) +
                    parseInt(response[6]?.disagree_count || 0) +
                    parseInt(response[7]?.disagree_count || 0) +
                    parseInt(response[8]?.disagree_count || 0);
                var neutralTotal =
                    parseInt(response[0]?.neutral_count || 0) +
                    parseInt(response[1]?.neutral_count || 0) +
                    parseInt(response[2]?.neutral_count || 0) +
                    parseInt(response[3]?.neutral_count || 0) +
                    parseInt(response[4]?.neutral_count || 0) +
                    parseInt(response[5]?.neutral_count || 0) +
                    parseInt(response[6]?.neutral_count || 0) +
                    parseInt(response[7]?.neutral_count || 0) +
                    parseInt(response[8]?.neutral_count || 0);
                var agreeTotal =
                    parseInt(response[0]?.agree_count || 0) +
                    parseInt(response[1]?.agree_count || 0) +
                    parseInt(response[2]?.agree_count || 0) +
                    parseInt(response[3]?.agree_count || 0) +
                    parseInt(response[4]?.agree_count || 0) +
                    parseInt(response[5]?.agree_count || 0) +
                    parseInt(response[6]?.agree_count || 0) +
                    parseInt(response[7]?.agree_count || 0) +
                    parseInt(response[8]?.agree_count || 0);
                var stronglyAgreeTotal =
                    parseInt(response[0]?.strongly_agree_count || 0) +
                    parseInt(response[1]?.strongly_agree_count || 0) +
                    parseInt(response[2]?.strongly_agree_count || 0) +
                    parseInt(response[3]?.strongly_agree_count || 0) +
                    parseInt(response[4]?.strongly_agree_count || 0) +
                    parseInt(response[5]?.strongly_agree_count || 0) +
                    parseInt(response[6]?.strongly_agree_count || 0) +
                    parseInt(response[7]?.strongly_agree_count || 0) +
                    parseInt(response[8]?.strongly_agree_count || 0);

                $('#sqd0-strongly-disagree').text(response[0].strongly_disagree_count || 0);
                $('#sqd0-disagree').text(response[0].disagree_count || 0);
                $('#sqd0-neutral').text(response[0].neutral_count || 0);
                $('#sqd0-agree').text(response[0].agree_count || 0);
                $('#sqd0-strongly-agree').text(response[0].strongly_agree_count || 0);
                $('#sqd1-strongly-disagree').text(response[1].strongly_disagree_count || 0);
                $('#sqd1-disagree').text(response[1].disagree_count || 0);
                $('#sqd1-neutral').text(response[1].neutral_count || 0);
                $('#sqd1-agree').text(response[1].agree_count || 0);
                $('#sqd1-strongly-agree').text(response[1].strongly_agree_count || 0);
                $('#sqd2-strongly-disagree').text(response[2].strongly_disagree_count || 0);
                $('#sqd2-disagree').text(response[2].disagree_count || 0);
                $('#sqd2-neutral').text(response[2].neutral_count || 0);
                $('#sqd2-agree').text(response[2].agree_count || 0);
                $('#sqd2-strongly-agree').text(response[2].strongly_agree_count || 0);
                $('#sqd3-strongly-disagree').text(response[3].strongly_disagree_count || 0);
                $('#sqd3-disagree').text(response[3].disagree_count || 0);
                $('#sqd3-neutral').text(response[3].neutral_count || 0);
                $('#sqd3-agree').text(response[3].agree_count || 0);
                $('#sqd3-strongly-agree').text(response[3].strongly_agree_count || 0);
                $('#sqd4-strongly-disagree').text(response[4].strongly_disagree_count || 0);
                $('#sqd4-disagree').text(response[4].disagree_count || 0);
                $('#sqd4-neutral').text(response[4].neutral_count || 0);
                $('#sqd4-agree').text(response[4].agree_count || 0);
                $('#sqd4-strongly-agree').text(response[4].strongly_agree_count || 0);
                $('#sqd5-strongly-disagree').text(response[5].strongly_disagree_count || 0);
                $('#sqd5-disagree').text(response[5].disagree_count || 0);
                $('#sqd5-neutral').text(response[5].neutral_count || 0);
                $('#sqd5-agree').text(response[5].agree_count || 0);
                $('#sqd5-strongly-agree').text(response[5].strongly_agree_count || 0);
                $('#sqd6-strongly-disagree').text(response[6].strongly_disagree_count || 0);
                $('#sqd6-disagree').text(response[6].disagree_count || 0);
                $('#sqd6-neutral').text(response[6].neutral_count || 0);
                $('#sqd6-agree').text(response[6].agree_count || 0);
                $('#sqd6-strongly-agree').text(response[6].strongly_agree_count || 0);
                $('#sqd7-strongly-disagree').text(response[7].strongly_disagree_count || 0);
                $('#sqd7-disagree').text(response[7].disagree_count || 0);
                $('#sqd7-neutral').text(response[7].neutral_count || 0);
                $('#sqd7-agree').text(response[7].agree_count || 0);
                $('#sqd7-strongly-agree').text(response[7].strongly_agree_count || 0);
                $('#sqd8-strongly-disagree').text(response[8].strongly_disagree_count || 0);
                $('#sqd8-disagree').text(response[8].disagree_count || 0);
                $('#sqd8-neutral').text(response[8].neutral_count || 0);
                $('#sqd8-agree').text(response[8].agree_count || 0);
                $('#sqd8-strongly-agree').text(response[8].strongly_agree_count || 0);

                $('#strongly-disagree-total').text(stronglyDisagreeTotal);
                $('#disagree-total').text(disagreeTotal);
                $('#neutral-total').text(neutralTotal);
                $('#agree-total').text(agreeTotal);
                $('#strongly-agree-total').text(stronglyAgreeTotal);
                $('#total-feedbacks').text(response[9]);
                $('#yearly-feedbacks').text(response[10]);

                myChart.data.datasets[0].data = [
                    response[0]?.strongly_disagree_count || 0,
                    response[0]?.disagree_count || 0,
                    response[0]?.neutral_count || 0,
                    response[0]?.agree_count || 0,
                    response[0]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[1].data = [
                    response[1]?.strongly_disagree_count || 0,
                    response[1]?.disagree_count || 0,
                    response[1]?.neutral_count || 0,
                    response[1]?.agree_count || 0,
                    response[1]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[2].data = [
                    response[2]?.strongly_disagree_count || 0,
                    response[2]?.disagree_count || 0,
                    response[2]?.neutral_count || 0,
                    response[2]?.agree_count || 0,
                    response[2]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[3].data = [
                    response[3]?.strongly_disagree_count || 0,
                    response[3]?.disagree_count || 0,
                    response[3]?.neutral_count || 0,
                    response[3]?.agree_count || 0,
                    response[3]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[4].data = [
                    response[4]?.strongly_disagree_count || 0,
                    response[4]?.disagree_count || 0,
                    response[4]?.neutral_count || 0,
                    response[4]?.agree_count || 0,
                    response[4]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[5].data = [
                    response[5]?.strongly_disagree_count || 0,
                    response[5]?.disagree_count || 0,
                    response[5]?.neutral_count || 0,
                    response[5]?.agree_count || 0,
                    response[5]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[6].data = [
                    response[6]?.strongly_disagree_count || 0,
                    response[6]?.disagree_count || 0,
                    response[6]?.neutral_count || 0,
                    response[6]?.agree_count || 0,
                    response[6]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[7].data = [
                    response[7]?.strongly_disagree_count || 0,
                    response[7]?.disagree_count || 0,
                    response[7]?.neutral_count || 0,
                    response[7]?.agree_count || 0,
                    response[7]?.strongly_agree_count || 0,
                ];

                myChart.data.datasets[8].data = [
                    response[8]?.strongly_disagree_count || 0,
                    response[8]?.disagree_count || 0,
                    response[8]?.neutral_count || 0,
                    response[8]?.agree_count || 0,
                    response[8]?.strongly_agree_count || 0,
                ];

                myChart.update();
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    });
</script>
