import { Component, EventEmitter, Input, Output } from '@angular/core';
import { NgbActiveModal } from '@ng-bootstrap/ng-bootstrap';
import { ToastrService } from 'ngx-toastr';
import { AttributesService } from '../service/attributes.service';

@Component({
  selector: 'app-sub-attribute-delete',
  templateUrl: './sub-attribute-delete.component.html',
  styleUrls: ['./sub-attribute-delete.component.scss']
})
export class SubAttributeDeleteComponent {

  @Input() propertie:any;

  @Output() PropertieD: EventEmitter<any> = new EventEmitter();

  isLoading:any;
  constructor(
    public attributeService: AttributesService,
    private toastr: ToastrService,
    public modal: NgbActiveModal,
  ){

  }
  ngOnInit(): void {
    //Called after the constructor, initializing input properties, and the first call to ngOnChanges.
    //Add 'implements OnInit' to the class.
    this.isLoading = this.attributeService.isLoading$;
  }
  delete(): void{
;    this.attributeService.deletePropertie(this.propertie.propertie_id).subscribe((resp:any) => {
        this.PropertieD.emit({message: 200});
        this.toastr.success('Atributo eliminada correctamente');
        this.modal.close();
    });
  }
}