<?php

namespace Tests\Browser;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsCreateTest extends DuskTestCase
{
    /**
     * Form accessibility test.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->assertSee('News creation')
                ->assertSee('Category')
                ->assertSee('Publication date');
        });
    }

    /**
     * Test for invalid values in the title field.
     *
     * @return void
     */
    public function testInvalidTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title', '')
                ->press('Save')
                ->assertSee('The title field is required.')

                ->type('title', 'short')
                ->press('Save')
                ->assertSee('The title must be at least 10 characters.')

                ->type('title', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.')
                ->press('Save')
                ->assertSee('The title must not be greater than 255 characters.')

                ->type('title', 'Existing title')
                ->press('Save')
                ->assertSee('The title has already been taken.');
        });
    }

    /**
     * Test for invalid values in the content field.
     *
     * @return void
     */
    public function testInvalidContent()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('content', '')
                ->press('Save')
                ->assertSee('The content field is required.')

                ->type('content', 'short')
                ->press('Save')
                ->assertSee('The content must be at least 50 characters.');
        });
    }

    /**
     * Test for invalid values in the category_id field.
     *
     * @return void
     */
    public function testInvalidCategory()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id', '2')
                ->value('option[value="2"]', '')
                ->clear('publish_date')
                ->press('Save')
                ->assertSee('The category id field is required.')

                ->select('category_id', '2')
                ->value('option[value="2"]', 'string')
                ->clear('publish_date')
                ->press('Save')
                ->assertSee('The category id must be a number.')

                ->select('category_id', '2')
                ->value('option[value="2"]', '999')
                ->clear('publish_date')
                ->press('Save')
                ->assertSee('The selected category id is invalid.');
        });
    }

    /**
     * Test for invalid values in the publish_date field.
     *
     * @return void
     */
    public function testInvalidDate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->clear('publish_date')
                ->press('Save')
                ->assertSee('The publish date field is required.')

                ->keys('#date', date('Y-m-d'))
                ->keys('#date', '{tab}')
                ->keys('#date', date('s:H:m'))
                ->press('Save')
                ->assertSee('The publish date is not a valid date.');
        });
    }

    /**
     * Test for invalid values in the status_id field.
     *
     * @return void
     */
    public function testInvalidStatus()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->radio('status_id', '2')
                ->value('input[type="radio"][value="2"]', '')
                ->press('Save')
                ->assertSee('The status id field is required.')

                ->radio('status_id', '2')
                ->value('input[type="radio"][value="2"]', 'string')
                ->press('Save')
                ->assertSee('The status id must be a number.')

                ->radio('status_id', '2')
                ->value('input[type="radio"][value="2"]', '999')
                ->press('Save')
                ->assertSee('The selected status id is invalid.');
        });
    }

    /**
     * Valid form value test.
     *
     * @return void
     */
    public function testValidForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title', 'asdfghjkl;')
                ->type('content', 'Lorem ipsum dolor sit amet, consectetuer adipiscin.')
                ->select('category_id', '1')
                ->keys('#date', date('d-m-Y'))
                ->keys('#date', '{tab}')
                ->keys('#date', date('H:m:s'))
                ->radio('status_id', '1')
                ->press('Save')
                ->assertSee('Новость создана успешно.');
        });
    }
}
