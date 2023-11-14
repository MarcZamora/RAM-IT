<div>
<br>
<br>
<br>
<br>
<br>
<!-- select -->
<input type="month" id="data_option1" name="data_option1" value="<?=date('Y-m')?>">

<!-- select end -->

<div id="graph_container">
        <canvas id="line_chart1"></canvas>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
 // JavaScript to handle dropdown change event and update the graph
 $(document).ready(function () {
    // Function to update the line graph based on selected option
    function updateGraph1(selectedOption1) {
        $.ajax({
            method: "POST",
            url: "code/components/home/data1.php", // PHP script to fetch data
            data: { option: selectedOption1 },
            success: function (data) {
                var parsedData1 = JSON.parse(data);
                // Call a function to update the graph with the new data
                renderLineGraph1(parsedData1);
            },
            error: function () {
                console.error("Error fetching data.");
            }
        });
    }

    // Initial graph rendering
    updateGraph1($("#data_option1").val());

    // Event handler for dropdown change
    $("#data_option1").change(function () {
        var selectedOption1 = $(this).val();
        updateGraph1(selectedOption1);
    });
});

// Function to render the line graph
function renderLineGraph1(data) {
    var ctx1 = document.getElementById('line_chart1').getContext('2d');
    ctx1.canvas.width = 800;
    ctx1.canvas.height = 400;
    var myChart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: data.labels,
            datasets: data.datasets,
        },
        options: {
            responsive: false,
           
            scales: {
                y: {
                   
                }
            }
        }
    });
}
</script>





<!-- data -->

