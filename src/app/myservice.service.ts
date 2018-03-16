import {Injectable} from '@angular/core';
import {Http} from "@angular/http";

@Injectable()
export class MyserviceService {

    url: any = 'http://localhost/angularmysql/';
    dataReceived: any;

    constructor(public http: Http) {
    }

    getAllData() {
        this.http.get(this.url + 'api.php').subscribe(data => {
            this.dataReceived = data;
            this.dataReceived = this.dataReceived._body;
            console.log(this.dataReceived);
        });
    }

    postData() {
        let data: any = {};
        data.name = 'prbhash';
        data.email = 'jsjsj@gmail.com';
        data.password = '11111111';
        this.http.post(this.url + 'apiPost.php', data).subscribe(val => {
            console.log(val);
        });
    }

}
