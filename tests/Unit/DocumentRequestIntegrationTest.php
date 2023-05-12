<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\DocumentList;
use App\Models\DocumentRequest;

class DocumentRequestIntegrationTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateDocumentRequest()
    {
            // create a test user
            $user = User::factory()->create([
                'name' => 'John Doe',
                'email' => 'test@example.com',
                'pnum' => '1234567890',
                'address' => '123 Main St, Anytown USA',
                'bdate' => '1990-01-01',
                'years' => '5',
                'months' => '2',
                'municipality' => 'Anytown',
                'age' => '31',
                'password' => bcrypt('password'),
            ]);
    
            // simulate a user login request
            $response = $this->post('/login', [
                'email' => 'test@example.com',
                'password' => 'password',
            ]);
    
            // assert that the user is redirected to the home page
            $response->assertRedirect('/dashboard');
    


            // assert that the authenticated user is the test user
            $this->assertAuthenticatedAs($user);

            // Create a new DocumentList
            $documentList = DocumentList::create([
                'document_name' => 'Certification',
            ]);

            // Assert that the document list was added to the database
            $this->assertDatabaseHas('document_lists', [
                'document_name' => 'Certification',
            ]);

            $response = $this->post('/resident/doclist/create', [
                'document_name' => 'Certification'
            ]);
        // Assert that the created document list matches the attributes provided

        $documentRequestData = [
            'user_id' => $user->id,
            'document_id' => $documentList->id,
            'fname' => $user->name,
            'pnum' => $user->pnum,
            'address' => $user->address,
            'bdate' => $user->bdate,
            'years' => $user->years,
            'months' => $user->months,
            'municipality' => $user->municipality,
            'age' => $user->age,
        ];
        $documentRequest = DocumentRequest::create($documentRequestData);
        $this->assertEquals('Certification', $documentList->document_name);

                    // simulate a document request submission
                    $response = $this->post('/resident/docres/create', [
                        'user_id' => $user->id,
                        'document_id' => $documentList->id,
                        'fname' => $user->name,
                        'pnum' => $user->pnum,
                        'bdate' => $user->bdate,
                        'address' => $user->address
                    ]);

                    $this->assertEquals($documentRequest->user_id, $user->id);
                    $this->assertEquals($documentRequest->document_id, $documentList->id);
                    $this->assertEquals($documentRequest->fname, $user->name);
                    $this->assertEquals($documentRequest->pnum, $user->pnum);
                    $this->assertEquals($documentRequest->address, $user->address);








    }
}
