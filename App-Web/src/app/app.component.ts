import { Component } from '@angular/core';
import { EChartsOption } from 'echarts'; // Importez le type EChartsOption

@Component({
  selector: 'app-component',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title(title: any) {
    throw new Error('Method not implemented.');
  }
  chartOptions: EChartsOption = {
    title: {
      text: 'Graphique avec ngx-echarts'
    },
    tooltip: {
      trigger: 'axis'
    },
    legend: {
      data: ['Sales', 'Revenue']
    },
    xAxis: {
      type: 'category', // Assurez-vous que 'type' est une valeur correcte
      data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
    },
    yAxis: {
      type: 'value' // Vérifiez également ce type
    },
    series: [
      {
        name: 'Sales',
        type: 'line',
        data: [120, 200, 150, 80, 70, 110]
      },
      {
        name: 'Revenue',
        type: 'line',
        data: [90, 180, 120, 60, 50, 90]
      }
    ]
  };
}
