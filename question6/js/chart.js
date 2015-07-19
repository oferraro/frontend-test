$().ready(function () {
    
    var options = {
        low: 0,
        high: 1500,
        onlyInteger: true,
        stackBars: true,
        axisY: {
            onlyInteger: true,
            labelInterpolationFnc: function(value) {
            return value;         
            }
        }    
};
    
    new Chartist.Bar('.ct-chart', {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      series: [
        [210, 400, 210, 300, 400, 210, 380],
        [1010, 980, 800, 950, 940, 1090, 1070]
      ]
    }, options
    ).on('draw', function(data) {
      if(data.type === 'bar') {
        data.element.attr({
          style: 'stroke-width: 8%'
        });
      }
    });

});
