<div>
<br>
<br>
<br>
<br>
<br>
<!-- select -->
<input type="month" id="data_option" name="data_option" value="<?=date('Y-m')?>">

<!-- select end -->

<div id="graph_container">
        <canvas id="line_chart"></canvas>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
 // JavaScript to handle dropdown change event and update the graph
 $(document).ready(function () {
    // Function to update the line graph based on selected option
    function updateGraph(selectedOption) {
        $.ajax({
            method: "POST",
            url: "code/components/home/data.php", // PHP script to fetch data
            data: { option: selectedOption },
            success: function (data) {
                var parsedData = JSON.parse(data);
                // Call a function to update the graph with the new data
                renderLineGraph(parsedData);
            },
            error: function () {
                console.error("Error fetching data.");
            }
        });
    }

    // Initial graph rendering
    updateGraph($("#data_option").val());

    // Event handler for dropdown change
    $("#data_option").change(function () {
        var selectedOption = $(this).val();
        updateGraph(selectedOption);
    });
});

// Function to render the line graph
function renderLineGraph(data) {
    var ctx = document.getElementById('line_chart').getContext('2d');
    ctx.canvas.width = 800;
    ctx.canvas.height = 400;
    var myChart = new Chart(ctx, {
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

