import { IAnimal } from './animal.model';

export interface IMaster {
    name?: string,
    surname?: string,
    animals?: IAnimal[]
}

export class Master implements IMaster {
    constructor(
        public name?: string,
        public surname?: string,
        public animals?: IAnimal[]
    ) {}
}