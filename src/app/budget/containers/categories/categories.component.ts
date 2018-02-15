import {Component, OnInit} from '@angular/core';
import {CategoryModel} from '../../models/category.model';


@Component({
    selector: 'app-products',
    styleUrls: ['products.component.scss'],
    templateUrl: 'categories.component.html',
})
export class CategoriesComponent implements OnInit {
    categories: CategoryModel[];

    constructor() {
    }

    ngOnInit() {

    }
}
