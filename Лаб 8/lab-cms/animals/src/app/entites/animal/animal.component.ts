import { Component, OnInit } from "@angular/core";
import { IAnimal } from 'src/app/shared/model/animal.model';
import { AnimalService } from './animal.service';
import { HttpResponse } from '@angular/common/http';

@Component({
    selector: 'app-animals',
    templateUrl: './animal.component.html'
})
export class AnimalComponent implements OnInit {

    animals!: IAnimal[];
    constructor(
        private animalService: AnimalService
    ){}
    ngOnInit(): void {
        this.animalService.query().subscribe((res: HttpResponse<IAnimal[]>) => {
            this.animals = res.body
        })
    }
}