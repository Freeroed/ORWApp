import { Injectable } from "@angular/core";
import { HttpResponse, HttpClient } from '@angular/common/http';
import { IAnimal } from 'src/app/shared/model/animal.model';
import { RESOURSE_URL } from 'src/app/app.constants';
import { Observable } from 'rxjs';

type EntityArrayResponseType = HttpResponse<IAnimal[]>
@Injectable({
    providedIn: 'root'
})
export class AnimalService {
    resouseUrl = RESOURSE_URL + 'animals';

    constructor(
        private http: HttpClient
    ) {}

    query(): Observable<EntityArrayResponseType> {
        return this.http.get<IAnimal[]>(this.resouseUrl, { observe: 'response'});
    }
}