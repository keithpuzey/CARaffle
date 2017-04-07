describe('CA Raffle UI Test', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://preprod.cacdsolutions.com/index.php');
    element(by.id('Name')).sendKeys('SauceLabs Test');
    });
});
