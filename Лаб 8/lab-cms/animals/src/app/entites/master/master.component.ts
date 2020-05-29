import { Component, OnInit } from "@angular/core";
import { IMaster } from 'src/app/shared/model/master.model';
import { MasterService } from './master.service';
import { HttpResponse } from '@angular/common/http';

@Component({
    selector: 'app-masters',
    templateUrl: './master.component.html'
})
export class MasterComponent implements OnInit {

    masters: IMaster[];

    constructor(
        private masterService: MasterService
    ){}
    ngOnInit(): void {
        this.masterService.query().subscribe((res:HttpResponse<IMaster[]>) => {
            this.masters = res.body
        })
    }
}