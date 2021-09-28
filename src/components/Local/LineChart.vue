<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  mounted() {
    this.renderChart(
      {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December"
        ],
        datasets: [
          {
            label: "2019",
            data: [34, 52, 19, 100, 70, 93, 33, 90, 96, 12, 10, 4],
            backgroundColor: "transparent",
            borderColor: "red",
            pointBackgroundColor: "red"
          },
          {
            label: "2020",
            data: [34, 52, 39, 46, 70, 93, 33, 50, 96, 12, 20, 39],
            backgroundColor: "transparent",
            borderColor: "yellow",
            pointBackgroundColor: "yellow"
          },
          {
            label: "2021",
            data: [34, 12, 39],
            backgroundColor: "transparent",
            borderColor: "green",
            pointBackgroundColor: "green"
          }
        ]
      },
      {
        responsive: true,
        maintainAspectRatio: false,
        title: {
          display: true,
          text: "Last Three Years"
        }
      }
    );
  }
};
</script>