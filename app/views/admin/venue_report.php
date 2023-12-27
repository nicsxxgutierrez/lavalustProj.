<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Audience List</title>
</head>
<body>
    <style>
        body{
            background: #80808045;
        }

        input[type=checkbox]
        {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5); /* IE */
            -moz-transform: scale(1.5); /* FF */
            -webkit-transform: scale(1.5); /* Safari and Chrome */
            -o-transform: scale(1.5); /* Opera */
            transform: scale(1.5);
            padding: 10px;
        }

        td{
            vertical-align: middle !important;
        }

        td p{
            margin: unset
        }

        img{
            max-width:100px;
            max-height: 150px;
        }

        #onPrint{
            display: none;
        }

    </style>

        <?php 
            $page = isset($_GET['page']) ?$_GET['page'] : "sidetopbar";
            include $page.'.php';
        ?>  

        <main id="view-panel">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Venue Report
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <form action="" id="filter">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Venue</label>
                                            <select name="venue_id" id="venue_id" class="custom-select select2">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="control-label">Month</label>
                                            <input type="month" name="month" class="form-control" id="month">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="" class="control-label">&nbsp;</label>
                                            <button class="btn-primary btn-sm btn-block col-sm-12">Filter</button>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="" class="control-label">&nbsp;</label>
                                            <button class="btn-success btn-sm btn-block col-sm-12" id="print" type="button"><i class="fa fa-print"></i> Print</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="row" id="printable">
                                    <div id="onPrint">
                                        <p class="text-center">Venue's Event List and Details</p>
                                        <hr>
                                        <p class="">Venue: <span id="venue"></span></p>
                                        <p class="">Month of: <span id="month-field"></span></p>
                                    </div>	
                                    <table class="table table-bordered">
                                        <thead>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Event</th>
                                            <th class="text-center">Schedule</th>
                                            <th class="text-center">Event Type</th>
                                            <th class="text-center">Event Fee</th>
                                        </thead>
                                        <tbody>
                                            <tr><th colspan="5"><center>Select Venue First.</center></th></tr>
                                        </tbody>
                                    </table>
                                </div>
				            </div>
			            </div>
		            </div>
	            </div>
            </div>
        </main>

        <noscript>
            <style>
                table{
                    width:100%;
                    border-collapse: collapse;
                }
                tr, td, th{
                    border: 1px solid black;
                }
                .text-center{
                    text-align:center;
                }
                p{
                    font-weight: 600
                }
            </style>
        </noscript>

        <script>
            $('#filter').submit(function(e){
                e.preventDefault()
                start_load()
                $.ajax({
                    url:'ajax.php?action=get_venue_report',
                    method:'POST',
                    data:$(this).serialize(),
                    success:function(resp){
                        if(resp){
                            resp = JSON.parse(resp)
                            if(!!resp.venue){
                                $('#venue').html(resp.venue.venue)
                                $('#month-field').html(resp.venue.month)
                            }
                            if(!!resp.data && Object.keys(resp.data).length > 0){
                                $('table tbody').html('')
                                    var i = 1;
                                    Object.keys(resp.data).map(k=>{
                                        var tr = $('<tr class="item"></tr>')
                                        tr.append('<td class="text-center">'+(i++)+'</td>')
                                        tr.append('<td class="">'+resp.data[k].event+'</td>')
                                        tr.append('<td class="">'+resp.data[k].sched+'</td>')
                                        tr.append('<td class="">'+resp.data[k].etype+'</td>')
                                        tr.append('<td class="">'+resp.data[k].fee+'</td>')
                                    $('table tbody').append(tr)
                                    })	
                            }else{
                                $('table tbody').html('<tr><th colspan="5"><center>No Data.</center></th></tr>')
                            }
                        }
                    },
                    complete:function(){
                        end_load()
                    }
                })
            })
            $('#print').click(function(){
                if($('table tbody').find('.item').length <= 0){
                    alert_toast("No Data to Print",'warning')
                    return false;
                }
                var nw= window.open("","_blank","width=900,heigth=600")
                nw.document.write($('noscript').html())
                nw.document.write($('#printable').html())
                nw.document.close()
                nw.print()
                setTimeout(function(){
                    nw.close()
                },700)
            })
        </script>

</body>
</html>