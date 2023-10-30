@extends('dashboard.layout.master')
@section('content')
<div class="container">
    <div class="w-100">
        <div class="margin-auto">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Bagan Catatan Kesehatan</h3>
                </div>
                <div class="panel-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
    </div>
{{ $cks->links() }}
</div>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<script src="/assets/chart/js/jquery.js"></script>
<script type="text/javascript" src="/assets/chart/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        var data1 = {!! json_encode($cks->pluck('sbp')) !!};
        var data2 = {!! json_encode($cks->pluck('dbp')) !!};
        var data3 = {!! json_encode($cks->pluck('kolesterol')) !!};
        var tanggal = {!! json_encode($cks->pluck('tanggal')) !!};
        console.log(data1);
        console.log(data2);
        console.log(data3);
        console.log(tanggal);

        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Catatan (SBP, DPB, Colesterol)"
                }
            },
            axisX: {
                // axisType: 'date',
                categoricalValues: tanggal
            },
            dataSeries: [
            {
                collectionAlias: "SBP",
                seriesType: "line",
                data: data1
            },
            {
                collectionAlias: "DBP",
                seriesType: "line",
                data: data2
            },
            {
                collectionAlias: "Colesterol",
                seriesType: "line",
                data: data3
            }
        ]
        });
    });
</script>
@endsection