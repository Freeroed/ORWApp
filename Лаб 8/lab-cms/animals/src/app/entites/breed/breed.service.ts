import { Injectable } from "@angular/core";
import { HttpResponse, HttpClient } from '@angular/common/http';
import { IBreed } from 'src/app/shared/model/breed.model';
import { RESOURSE_URL } from 'src/app/app.constants';
import { Observable } from 'rxjs';

type EntityArrayResponseType = HttpResponse<IBreed[]>
@Injectable({
    providedIn: 'root'
})
export class BreedService {
    resouseUrl = RESOURSE_URL + 'breeds';

    constructor(
        private http: HttpClient
    ) {}

    query(): Observable<EntityArrayResponseType> {
        return this.http.get<IBreed[]>(this.resouseUrl, { observe: 'response'});
    }
}