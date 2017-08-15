describe('CA MSF CDBU Raffle UI Test', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://CARaffle3.us-east-1.elasticbeanstalk.com');
    element(by.css('[name="Name"]')).sendKeys('Selenium Test User');
    element(by.buttonText('Submit')).click();
    });
});
