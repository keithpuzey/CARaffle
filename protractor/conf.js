exports.config = {
  baseUrl: 'http://caraffle3.us-east-1.elasticbeanstalk.com/',
  specs: ['spec.js'],
    onPrepare: function(){
    browser.driver.get('http://caraffle3.us-east-1.elasticbeanstalk.com/');
    element(by.linkText('About')).click();
    element(by.linkText('Home')).click();
    element(by.linkText('About')).click();
    element(by.linkText('Home')).click();
    element(by.css('[name="Name"]')).sendKeys('Keith 123');
    element(by.buttonText('Enter Raffle')).click();
  }
}
