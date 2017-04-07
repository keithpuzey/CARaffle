describe('angularjs homepage todo list', function() {
  it('should add a todo', function() {
    browser.get('http://preprod.cacdsolutions.com/index.php');
    browser.ignoreSynchronization = true;
    element(by.model('todoList.todoText')).sendKeys('write first protractor test');
    element(by.css('[value="add"]')).click();

  });
});
