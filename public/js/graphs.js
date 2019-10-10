$( document ).ready(function() { // 6,32 5,38 2,34
    $("#rendement").circliful({
        animation: 1,
        animationStep: 10,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 78,
        textSize: 28,
        textStyle: 'font-size: 12px;',
        textColor: '#666',
        multiPercentage: 1,
        percentages: [10, 20, 30]
    });
    $("#paid").circliful({
        animation: 1,
        animationStep: 10,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 82,
        textSize: 28,
        textStyle: 'font-size: 12px;',
        textColor: '#666',
        multiPercentage: 1,
        percentages: [10, 20, 30]
    });
    $("#graph3").circliful({
        animation: 1,
        animationStep: 10,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 100,
        textSize: 28,
        textStyle: 'font-size: 12px;',
        textColor: '#666',
        multiPercentage: 1,
        percentages: [10, 20, 30]
    });
    $("#graph4").circliful({
        animation: 1,
        animationStep: 10,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 12,
        textSize: 28,
        textStyle: 'font-size: 12px;',
        textColor: '#666',
        multiPercentage: 1,
        percentages: [10, 20, 30]
    });
});