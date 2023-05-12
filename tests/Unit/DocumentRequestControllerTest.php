<?php
namespace Tests\Unit;

use App\Models\User;
use App\Models\DocumentList;
use App\Models\DocumentRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Carbon\Carbon;


class DocumentRequestControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateDocumentRequest()
    {
        // create a test user
        $user = User::factory()->create();
    
        // create a test document
        $document = DocumentList::factory()->create();
    
        // create a document request
        $documentRequestData = [
            'user_id' => $user->id,
            'document_id' => $document->id,
            'fname' => 'John Doe',
            'pnum' => '1234567890',
            'address' => '123 Main St, Anytown USA',
            'bdate' => '1990-01-01',
            'years' => '5',
            'months' => '2',
            'municipality' => 'Anytown',
            'vdate' => '2023-05-07',
            'age' => '31',
            'representative' => 'Jane Doe',
            'purpose' => 'Employment',
            'reason' => 'New job',
            'relation' => 'Spouse',
            'status' => 'pending',
        ];
        $documentRequest = DocumentRequest::create($documentRequestData);
    
        // assert that the document request has been created with the correct data
        $this->assertEquals($user->id, $documentRequest->user_id);
        $this->assertEquals($document->id, $documentRequest->document_id);
        $this->assertEquals($documentRequestData['fname'], $documentRequest->fname);
        $this->assertEquals($documentRequestData['pnum'], $documentRequest->pnum);
        $this->assertEquals($documentRequestData['address'], $documentRequest->address);
        $this->assertEquals($documentRequestData['years'], $documentRequest->years);
        $this->assertEquals($documentRequestData['months'], $documentRequest->months);
        $this->assertEquals($documentRequestData['municipality'], $documentRequest->municipality);
        $this->assertEquals($documentRequestData['age'], $documentRequest->age);
        $this->assertEquals($documentRequestData['representative'], $documentRequest->representative);
        $this->assertEquals($documentRequestData['purpose'], $documentRequest->purpose);
        $this->assertEquals($documentRequestData['reason'], $documentRequest->reason);
        $this->assertEquals($documentRequestData['relation'], $documentRequest->relation);
        $this->assertEquals($documentRequestData['status'], $documentRequest->status);
    }
    
}
