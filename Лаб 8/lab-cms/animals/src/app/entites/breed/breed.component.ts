import { Component, OnInit } from "@angular/core";
import { IBreed } from 'src/app/shared/model/breed.model';
import { BreedService } from './breed.service';
import { HttpResponse } from '@angular/common/http';

@Component({
    selector: 'app-breeds',
    templateUrl: './breed.component.html'
})

export class BreedComponent implements OnInit {
    breeds!: IBreed[];

    constructor(
        private breedService: BreedService
    ) {}
    ngOnInit(): void {
        this.breedService.query().subscribe((res: HttpResponse<IBreed[]>) => {
            this.breeds = res.body
        })
    }
}