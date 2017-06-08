describe('CA Raffle UI Test - EMEA Environment', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://emea-preprod.cdbu.io');
    element(by.css('[name="name"]')).sendKeys('Selenium Test User');
    element(by.buttonText('submit')).click();
    });
});
