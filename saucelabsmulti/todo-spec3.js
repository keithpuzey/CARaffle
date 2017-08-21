describe('The Modern Software Factory Demo UI Test - CDBU.io', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://preprod.cdbu.io');
    element(by.css('[name="name"]')).sendKeys('Selenium Test User ' + parseInt(Math.random() * (10000)));
    element(by.buttonText('I\'m In!')).click();
    const EC = protractor.ExpectedConditions;
    browser.wait(EC.urlContains('welcome'), 5000);
    expect(element(by.css('.cross')).isPresent()).toBe(true);
  });
});
