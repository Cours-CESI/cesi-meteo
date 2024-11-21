import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { NgxEchartsModule } from 'ngx-echarts';

@NgModule({

    imports: [
        AppComponent,
        BrowserModule,
        NgxEchartsModule.forRoot({
        echarts: () => import('echarts') // Charge la librairie ECharts
    })
    ],
    providers: [],
    bootstrap: [AppComponent],
})
export class AppModule { }
