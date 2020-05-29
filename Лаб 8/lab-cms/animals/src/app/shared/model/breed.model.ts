import { IAnimal } from './animal.model';

export interface IBreed {
    name?: string,
    nameEng?: string,
    animals?: IAnimal[]
}

export class Breed implements IBreed {
    constructor (
        public name?: string,
        public nameEng?: string,
        public animals?: IAnimal[]
    ) {}
}