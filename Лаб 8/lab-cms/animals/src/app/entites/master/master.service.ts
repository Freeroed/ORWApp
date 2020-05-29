import { Injectable } from "@angular/core";
import { HttpResponse, HttpClient } from "@angular/common/http";
import { RESOURSE_URL } from 'src/app/app.constants';
import { IMaster } from 'src/app/shared/model/master.model';
import { Observable } from 'rxjs';

type EntityArrayResponseType = HttpResponse<IMaster[]>
@Injectable({
    providedIn: 'root'
})
export class MasterService {
    resouseUrl = RESOURSE_URL + 'masters';

    constructor(
        private http: HttpClient
    ) {}

    query(): Observable<EntityArrayResponseType> {
        return this.http.get<IMaster[]>(this.resouseUrl, { observe: 'response'});
    }
}