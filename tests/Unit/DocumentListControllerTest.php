<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\DocumentList;

class DocumentListControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_document_list_can_be_created()
    {
        // Create a new DocumentList
        $documentList = DocumentList::create([
            'document_name' => 'Certification',
        ]);

        // Assert that the document list was added to the database
        $this->assertDatabaseHas('document_lists', [
            'document_name' => 'Certification',
        ]);

        // Assert that the created document list matches the attributes provided
        $this->assertEquals('Certification', $documentList->document_name);
    }
}
