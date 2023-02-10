 <?php
// it('asserts true is true', function () {
////     $this->assertTrue(true);
//
//     expect(true)->toBeTrue();
// });

it("is equal",function (){

    $array = [1, 2, 3, 4];

    $this->assertEquals([1, 2, 3, 4], $array);

});

//todo run this command :  ./vendor/bin/pest Tests/Feature/PracticeTest.php
