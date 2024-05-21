function getStockItem(id,price,title){
       
    $.ajax({
        url: "{{ url('dashboard/getStock') }}"+"/"+id,
        success:function(response){
            if(response.qty < 0 || response.qty == 0){
                $('#qtyModal').modal('show');
            }else{
                let check;
                var rowCount = $(".addMoreRow tr").length;
                var tr = "<tr><td>"+response.title+"</td>"+
                    "<td><input type='hidden' name='item[]' class='form-control item' value='"+response.id+"'><input type='number' name='qty[]' min='1' class='form-control qty' required></td>"+
                    "<td><input type='text' name='price[]' class='form-control price' value='"+response.price+"'></td>"+
                    "<td><input type='text' name='total[]' class='form-control total' value=''></td>"+
                    "<td><button' class='btn btn-danger delete'><i class='fa fa-times' aria-hidden='true'></i></button></td>"
                    "</tr>";
                    
                    $(".item").each(function(){
                        let item_id = $(this).val();
                        if(item_id == id){
                            check = 1;
                        }else {
                            check = 0;
                        }
                    });
                    
                    if(check == 1){
                        $('#modal').modal('show');
                    }else{
                        $('.addMoreRow').append(tr);
                    }
                }
                // let check;
                // var rowCount = $(".addMoreRow tr").length;
                // var tr = "<tr><td>"+response.title+"</td>"+
                    //     "<td><input type='hidden' name='item[]' class='form-control item' value='"+response.id+"'><input type='number' name='qty[]' min='1' class='form-control qty' required></td>"+
                    //     "<td><input type='text' name='price[]' class='form-control price' value='"+response.per_price+"'></td>"+
                    //     "<td><input type='text' name='total[]' class='form-control total' value=''></td>"+
                    //     "<td><button' class='btn btn-danger delete'><i class='fa fa-times' aria-hidden='true'></i></button></td>"
                    //     "</tr>";
                    
                    //     $(".item").each(function(){
                        //         let item_id = $(this).val();
                        //         if(item_id == id){
                            //             check = 1;
                            //         }else {
                                //             check = 0;
                                //         }
                                //     });
                                
                                //     if(check == 1){
                                    //         $('#modal').modal('show');
                                    //     }else{
                                        //         $('.addMoreRow').append(tr);
                                        //     }
                                        
                                    }
                                });     
                            }
                            $('.addMoreRow').delegate('.delete','click',function(){
                                $(this).parent().parent().remove();
                            });
                            
                            function totalAmount(){
                                var total=0;
                                $('.total').each(function(i,e){
                                    var amount = parseInt($(this).val());
                                    total+=amount;
                                });
                                $('.total_bill').val(total);
                                $('.payable_amount').val(total);
                            }
                            
                            $('.addMoreRow').delegate('.qty','keyup change',function(){
                                var tr=$(this).parent().parent();
                                var qty = parseInt(tr.find('.qty').val());
                                var price = parseInt(tr.find('.price').val());
                                total=qty*price;
                                tr.find('.total').val(total);
                                totalAmount();
                                
                            });
                            
                            $('.discount').on('keyup',function(){
                                var discount = parseInt($(this).val());
                                var total_bill = parseInt($('.total_bill').val());
                                var payable_amount = total_bill - discount;
                                $('.payable_amount').val(payable_amount);
                            });
                            
                            
                            
                            $('.customer_name').on('keyup',function(){
                                searchValue = $(this).val();
                                $.ajax({
                                    url: "{{ url('dashboard/getCustomer') }}",
                                    data: {
                                        search: searchValue,
                                    },
                                    success:function(response){
                                        var output = '<ul class="list-group displayCustomer">';
                                            $.each(response, function(key, val){
                                                output += '<li class="list-group-item selectSearchCustomer">'+val.name+'</li>';       
                                            });
                                            output += '</ul>';
                                            $('.display').html(output);
                                            if($(".customer_name").val() == ""){
                                                $(".displayCustomer").remove();
                                            }
                                            
                                            $('.selectSearchCustomer').click(function(){
                                                var customerName = $(this).html();
                                                $('.customer_name').val(customerName);
                                                $(".displayCustomer").remove();
                                            });
                                        }
                                    });
                                });
                                
                                $('.searchProduct').on('keyup',function(){
                                    searchValue = $(this).val();
                                    $.ajax({
                                        url: "{{ url('dashboard/getItems') }}",
                                        data: {
                                            search: searchValue,
                                        },
                                        success:function(response){
                                            console.log(response);
                                            var output = '<ul class="list-group displayItemsList">';
                                                $.each(response, function(key, val){
                                                    output += '<li class="list-group-item selectSearchItems" onclick="getStockItem('+val.id+')">'+val.title+'</li>';       
                                                });
                                                output += '</ul>';
                                                $('.displayItems').html(output);
                                                if($(".display_item").val() == ""){
                                                    $(".displayItemsList").remove();
                                                }
                                                
                                                $('.selectSearchItems').click(function(){
                                                    var itemName = $(this).html();
                                                    $('.searchProduct').val(itemName);
                                                    $(".displayItemsList").remove();
                                                });
                                            }
                                        });
                                    });
                                    