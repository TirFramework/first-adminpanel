
<script src="/adminpanel/js/jquery-3.3.1.js"></script>

<script>


    //create actionable fields
    class additionalField {

        constructor(cloningElement) {

            this.cloningElement = cloningElement;
            this.$item;
            this.dateId;
            this.templateHtml;
            this.callback;

            // add to jquery
            this.$cloningElement = $(this.cloningElement);
            this.addPlusButton();
            this.clone();
            this.removeItem();
            this.addRowButton();

        }

        clone(){
            //find item into cloningElement
            this.$item =  this.$cloningElement.find('.item');

            //because we always have an item but index start from zero
            this.dataId = this.$item.length - 1;



            var self = this;
            this.$item.each(function () {
                self.findAndReplaceItem(this);
            });


        }




        addRow(){
            let newItem = $('<div class="item"></div>');
            $(newItem).append(`<a class="remove-item btn"><i class="fas fa-times"></i></a> ${this.templateHtml} `);

            let self = this;
            $(newItem).find('[name]').each(function () {
                let nameTemplate = $(this).attr('name-template');
                $(this).removeAttr('name-template');
                let newName = self.replaceAll(nameTemplate, 'xxx', self.dataId);
                $(this).attr('name', newName);
                $(this).val('');
            });


            $(newItem).find('[id]').each(function () {
                let idTemplate = $(this).attr('id-template');
                $(this).removeAttr('id-template');
                let idName = self.replaceAll(idTemplate, 'xxx', self.dataId);
                $(this).attr('id', idName);
            });


            $(this.$cloningElement).append(newItem);

            console.log(this.$cloningElement);
            self.callback();

            this.dataId++;

        }

        findAndReplaceItem(item){

            this.templateHtml = $(item).html();

            $(item).remove();
            let newItem = $('<div class="item"></div>');


            // add remove button
            $(newItem).append(`<a class="remove-item btn"><i class="fas fa-times"></i></a> ${this.templateHtml} `);


            let self = this;
            //find xxx replace with name index
            $(newItem).find('[name]').each(function () {

                let nameTemplate = $(this).attr('name-template');
                console.log(nameTemplate);
                $(this).removeAttr('name-template');
                let newName = self.replaceAll(nameTemplate, 'xxx', self.dataId);
                $(this).attr('name', newName);
            });

            //find xxx replace with name index
            $(newItem).find('[id]').each(function () {

                var idTemplate = $(this).attr('id-template');
                $(this).removeAttr('id-template');
                let idName = self.replaceAll(idTemplate, 'xxx', self.dataId);
                $(this).attr('id', idName);

            });
            $(this.$cloningElement).append(newItem);


            self.dataId++;

        }

        addPlusButton(){
            this.$cloningElement.after(`<a class="plus btn"><i class="fas fa-plus"></i></a>`);

        }

        replaceAll(str, find, replace) {
            return str.replace(new RegExp(find, 'g'), replace);
        }


        removeItem(){
            this.$cloningElement.on("click", 'a.remove-item', function (e) {
                e.preventDefault();
                $(this).parents('.item').remove();
            });
        }


        addRowButton(){

            let self = this;
            $('body').on("click", this.cloningElement + '+ a.plus', function () {
                self.addRow();
            });
        }


        callback(){
            return this.callback;
        }


    }

</script>

@stack('firstScripts')
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script >
$(function () {
    $(".sortable").sortable();
    $(".sortable").disableSelection();
});
</script>


<script src="/adminpanel/js/flatpickr.min.js"></script>
<script src="/adminpanel/js/jdate.min.js"></script>

<script src="/adminpanel/libs/jquery-validate/jquery.validate.min.js"></script>

<script src="/adminpanel/libs/jquery-validate/localization/messages_fa.js"></script>


<script>
    window._Date = window.Date
    // console.log(window.Date);
</script>
<script src="/adminpanel/js/l10n/fa.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="/adminpanel/js/bootstrap.min.js"></script>


<!-- DataTables -->
<script type="text/javascript" src="/adminpanel/libs/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/adminpanel/libs/DataTables/Select-1.2.5/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="/adminpanel/libs/DataTables/Buttons-1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/adminpanel/libs/DataTables/Editor-1.7.3/js/dataTables.editor.min.js"></script>




<!-- Bootstrap Select  -->
<!-- <script type="text/javascript" src="/adminpanel/libs/bootstrapSelect/dist/js/bootstrap-select.js"></script> -->



<!-- Select2 -->
<script src="/adminpanel/libs/select2/js/select2.min.js"></script>

@if( config('app.locale') == 'fa' )
<script src="/adminpanel/libs/select2/js/i18n/fa.js"></script>
@endif


<script src="/adminpanel/js/bootstrap-datepicker.js"></script>
<script src="/adminpanel/js/custom.js"></script>


<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
{{--<script> ('#lfm').filemanager('image'); </script>--}}

<script src="/adminpanel/libs/tinymce/tinymce.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script>



    //File Manager
    $('.file-btn').filemanager('file');   //btn file

    //select
//    $('.select').selectpicker({
//        style: ' input-md',
//        size: 6
//    });









    $('.select2').select2({
        dir: $('body').attr('dir'),
        language: $('html').attr('lang'),
    });


    // $(".select2.taggable").select2({
    //     tags: true,
    //     dir: $('body').attr('dir'),
    //     language: $('html').attr('lang'),
    // });


    //create and config editor
    function editor (){
        var editor_config = {
            path_absolute : "/",
            selector: ".textarea",
            // valid_elements: "@[class],*[style],h1,h2,h3,h4,h5,h6,a[href|target],strong/b,"
            // + "div[*],br,table,tbody,thead,tr,td,th,ul,ol,li,img[src],i[*],small[*],span[*],article,section,nav,style",
            valid_elements: '*[*]',
            @if( config('app.locale') == 'fa' )
                directionality : 'rtl',
                language: 'fa_IR',
            @endif
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "ltr rtl insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            directionality :"rtl",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
        tinymce.init(editor_config);
    }


    //create data table
    class datatable {
        constructor(table, column, name, routeName) {
            this.table = table;
            this.column = column;
            this.name = name;
            this.routeName = routeName;

            //add two column to data column
            // this.column.unshift({data: null, defaultContent: '<i class=\"fas fa-arrows-alt\"></i>', orderable: false, searchable: false, className: 'reorder'});
            this.column.push({data: 'action', name: 'action', orderable: false, searchable: false});
        }
        create(order,filters,route,serverSide=true)
        {
        //for create filters
            var filterCols=[];
            $.each(filters,function (key,value) {
                filterCols.push(Number(key));           //get number of columns and save into a new array from object {'column:value','column2:value'}
            });

            //create datetable
            var table = this.dtTable = $(this.table).DataTable({
                processing: true,
                serverSide: serverSide,
                dom: 'flrtipB',
                @if( config('app.locale') == 'fa' )
                "language": {
                    "url": "/vendor/datatables/Persian.json"
                },
                @endif
                pagingType: 'full_numbers',
                buttons: [
                    'selectAll', 'selectNone', 'copy','excel', 'pdf', 'print'
                ],
                pagingType: "full_numbers",
                sPaginationType: "listbox",
                select:
                    {
                        style: 'multi',
                        style: 'os',
                    },
                pageLength: 25,
                lengthMenu: [[10, 25, 50, 100, 500, -1], [10, 25, 50, 100, 500, "All"]],
                order: order,
                ajax: route,
                responsive: true,

                columns: this.column,
                columnDefs: [{
                    targets: filterCols,
                    render: function (data, type, full, meta) {
                        if (type === 'filter') {
                            return $('#dataCheck').DataTable().cell(meta.row, meta.col).nodes().to$().find('input').val();
                        } else {
                            return data;
                        }

                    }
                }],


                initComplete: function () {
                    this.api().columns().every(function (i) {
                        var column = this;
                        if (filterCols.includes(i)) //check in array for which column select for enable filter
                        {
                            //var select = $('<select class="select2" data-live-search="true"><option value="...">{{trans('panel.all')}}</option></select>')
                            //TODO:refactor paginate selet2
                            var select = $('<select class="select2 filter" data-live-search="true"><option value="">{{trans('crud::panel.all')}}</option></select>')
                                .appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    var val = $(this).val();
                                    if(val != ""){
                                        val = '^'+ val +'$';
                                    }
                                    column.search(val, true, false)
                                        .draw(true);
                                });

                            $.each(filters[i],function (key,value) {
                                select.append('<option value="' + value + '">' + value + '</option>')
                            });

                            if (filters[i].length > 6){
                                select.attr('data-live-search','ture')
                            }
                            $('.select2').select2({
                                dir: $('body').attr('dir'),
                            });

                        }
                    });
                },

                // rowReorder: {
                //     dataSrc: 'sort_order',
                //     update: false, // this is key to prevent DT auto update
                //     select: 'reorder'
                // }

            });

            //action
            name = this.name; //for use in jquery function
            $("#action").click(function() {

                var action = $('#actionSelect').val();
                var selectedRows= table.rows('.selected').data().pluck('id');
                var ids = [];
                $.each( selectedRows, function( key, value ) {
                    ids.push(value);		// record id from datatable
                });

                if(ids.length > 0 && action.length > 0) {
                    if (!confirm("{{trans('message.action_confirm')}}"))
                    {
                        return false;
                    }
                    $.ajax({
                        type: "POST",
                        url: ""+'/admin/'+name+'/action',
                        headers: {
                            'X-CSRF-TOKEN': "{{Session::token()}}"
                        },
                        data: {'ids': ids, 'action':action},
                        dataType: 'json',
                        cache: false,
                        success: function () {
                            location.reload();
                        }
                    });
                }else{
                    alert("{{trans('message.please-select-item')}}");
                }
            });
        }

        reorder() {
            var table = this.dtTable;
            var name = this.name;
            table.on('row-reorder', function (e, diff, edit) {
                let myArray = [];
                for (let i = 0, ien = diff.length; i < ien; i++) {
                    let rowData = table.row(diff[i].node).data();
                    myArray.push({
                        id: rowData.id,			// record id from datatable
                        position: diff[i].newData		// new position
                    });
                    let result;
                    //result += rowData.id + ' updated to be in position ' +
                    diff[i].newData + ' (was ' + diff[i].oldData + ')<br>';
                }
                //$('#result').html('Event result:<br>' + result);
                $.ajax({
                    type: "POST",
                    url: '/admin/'+name+'/reorder',
                    headers: {
                        'X-CSRF-TOKEN': "{{Session::token()}}"
                    },
                    data: {data: myArray},
                    dataType: 'json',
                    cache: false,
                    success: function () {
                        table.ajax.reload();
                    }
                });
            });

            //order inline edit
            let token = "<?php echo(Session::token()); ?>";
            let editor = new $.fn.dataTable.Editor({
                table: this.table,
                idSrc: 'id',
                fields: [{
                    label: "Order:",
                    name: "sort_order"
                }]
            });

            // Activate an inline edit on click of a table cell
            $(this.table).on('click', 'tbody .sort_order', function (e) {
                editor.inline(this);
            });
            //for inline edit order Update
            editor.on('setData', function (e, json, data, action) {
                $.ajax({
                    type: "POST",
                    url: '/admin/'+name+'/reorder',
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    data: data,
                    dataType: 'json',
                    cache: false,
                });
            });
        }
    }


    //delete row
    function deleteRow(route) {
        <?php $token=Session::token(); ?>

        if (!confirm("{{trans('message.delete_confirm')}}"))
            return false;
        var form = document.createElement("form");
        form.setAttribute("method", "POST");
        form.setAttribute("action",route);
        var hiddenField1 = document.createElement("input");
        hiddenField1.setAttribute("name", "_method");
        hiddenField1.setAttribute("value",'DELETE');
        form.appendChild(hiddenField1);
        var hiddenField2 = document.createElement("input");
        hiddenField2.setAttribute("name", "_token");
        hiddenField2.setAttribute("value",'<?= $token ?>');
        form.appendChild(hiddenField2);
        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
    }

</script>


<!-- set url active -->
<script>
$(function(){
    var current = location;
    $('.nav li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href') == current ){
            $this.addClass('active');
            $this.parents('.parent').find('.icon').find('.fa').addClass('fa-minus');
            $this.parents('.parent').find('.children').addClass('in');
        }
    })
})
</script>


<script>

var links = document.querySelectorAll('.btn');

for (var i = 0, len = links.length; i < len; i++) {
  links[i].addEventListener('click', function (e) {
    var targetEl = e.target;
    var inkEl = targetEl.querySelector('.ink');

    if (inkEl) {
      inkEl.classList.remove('animate');
    }
    else {
      inkEl = document.createElement('span');
      inkEl.classList.add('ink');
      inkEl.style.width = inkEl.style.height = Math.max(targetEl.offsetWidth, targetEl.offsetHeight) + 'px';
      targetEl.appendChild(inkEl);
    }

    inkEl.style.left = (e.offsetX - inkEl.offsetWidth / 2) + 'px';
    inkEl.style.top = (e.offsetY - inkEl.offsetHeight / 2) + 'px';
    inkEl.classList.add('animate');
  }, false);
}

</script>

<script defer src="/adminpanel/libs/fontawesome-free/js/all.min.js"></script>


<!--load all styles -->



<script>
    function addCommand(number){
        number = number.toString().replace(/\D/g, "");
        number = number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        return number;
    }

    function priceInput(input){
        var PRICE = $(input).val();
        var classname = $(input).attr('class');
        var placeholder = $(input).attr('placeholder');
        if (placeholder == undefined){
            placeholder = '';
        }
        classname = classname.replace('price', "");

        PRICE = addCommand(PRICE);

        // $(input).wrap( '<div class="price-group"></div>' );
        $(input).after('<input class="cloneprice form-control" placeholder="'+placeholder+'" type="text" value="'+PRICE+'" id="cloneprice"/>'
        );

        $(input).hide();
    }


    if( $(".PRICE, .price").length ){

        $(".PRICE, .price").each(function() {
            var PRICE = $(this).html();
            PRICE = PRICE.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
            $(this).html(PRICE);
        });
        
    }



    function cloneprice(input){
        var oldinput = $(input).parent('.price-group').find("input.price");

        var PRICE = $(input).val();

        PRICE = addCommand(PRICE);

        $(input).val(PRICE);

        oldprice = PRICE.replace(/\D/g, "");

        oldinput.val(oldprice);
    }

    $(document).on('keyup', 'input.cloneprice', function(){
        cloneprice(this);
    });

    $("input.price").each( function () {
        priceInput(this);
    });

</script>


@stack('scripts')
</body>
</html>
