import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import 'rxjs/add/observable/throw';

@Injectable()
export class BudgetService {
  constructor(private http: HttpClient) {}

}
