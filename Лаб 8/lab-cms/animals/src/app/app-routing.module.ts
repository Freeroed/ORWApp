import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AnimalComponent } from './entites/animal/animal.component';
import { BreedComponent } from './entites/breed/breed.component';
import { MasterComponent } from './entites/master/master.component';


const routes: Routes = [
  {
    path: '',
    component: AnimalComponent
  },
  {
    path: 'breeds',
    component: BreedComponent
  },
  {
    path: 'masters',
    component: MasterComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
