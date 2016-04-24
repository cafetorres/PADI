$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '1',
            Acumulado: 18344.33,
           
            
        }, {
            period: '2',
            Acumulado: 37342.33,
          
           
        }, {
            period: '3',
            Acumulado: 57015.40,
           
           
        }, {
            period: '4',
            Acumulado: 59010,
            
           
        }, {
            period: '5',
            Acumulado: 61076.32,
           
           
        }, {
            period: '6',
            Acumulado: 66213.99,
           
            
        }, {
            period: '7',
            Acumulado: 86913.95,
            
           
        }, {
            period: '8',
            Acumulado: 108350.14,
            
          
        }, {
            period: '9',
            Acumulado: 130548.75,
           
           
        }, {
            period: '10',
            Acumulado: 153536.89,
        }, {

            period: '11',
            Acumulado: 177342.66,


        }, {
            period: '12',
            Acumulado: 201995.12,


        }, {
            period: '13',
            Acumulado: 227524.40,


        }, {
            period: '14',
            Acumulado: 253223.68,


        }, {
            period: '15',
            Acumulado: 281339.25,
           
        }],
        xkey: 'period',
        ykeys: ['Acumulado'],
        labels: ['Acumulado'],
        pointSize: 5,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
