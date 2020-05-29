import { IBreed } from './breed.model';

export interface IAnimal {
    name?: string,
    color?: string,
    breed?: IBreed,
    image?: string
}

export class Animal implements IAnimal{
    constructor(
        public name?: string,
        public color?: string,
        public breed?: IBreed,
        public image?: string
    ){}
}