@extends('templates.layout')
@section('content')
    <h4>Preprints  with two or more reviews [{{ count($completedPapers) }}]
        <button class="btn" type="button" data-toggle="collapse" data-target="#completedPapers"
             aria-expanded="false" aria-controls="completedPapers">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i></h4>
    <div  class="collapse" id="completedPapers">
    @foreach($completedPapers as $paper)
    <p>Title: {{ $paper->title }}<br>
    Authors: {{ $paper->authors }}<br>
        <a class="btn btn-primary" href="{{ route('adminPapersCompleted',[$paper->id]) }}">Process</a></p>
    @endforeach
    </div>
    <h4>Preprints awaiting admin approval [{{ count($awaitingNomination) }}]
    <button class="btn" type="button" data-toggle="collapse" data-target="#awaitingNomination"
            aria-expanded="false" aria-controls="awaitingNomination">
        <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i></h4>
        <div  class="collapse" id="awaitingNomination">
    @foreach($awaitingNomination as $an)
    <p>Volume: {{ $an['volume'] }}, Paper: {{ $an['paperNumber'] }}<br>
        Title: {{ $an['title'] }}<br>
        Authors: {{ $an['authors'] }}<br>
        <a class="btn btn-primary" href="/underConstruction">Process</a> <a class="btn btn-danger"
            href="{{ route('markDeleted',['vol'=>$an['volume'],'pap'=>$an['paperNumber']]) }}">Mark as Deleted</a></p>
    @endforeach
        </div>
    <h4>Reviewers not responded [{{ count($notResponded) }}]
        <button class="btn" type="button" data-toggle="collapse" data-target="#notResponded"
                aria-expanded="false" aria-controls="notResponded">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i></h4>
            <div  class="collapse" id="notResponded">
    @foreach($notResponded as $nr)
        <p>Volume: {{ $nr->vol }}, Paper: {{ $nr->pap }}<br>
            Title: {{ $nr->paperTitle }}<br>
            Authors: {{ $nr->authors }}<br>
            Reviewer: {{ $nr->title.' '.$nr->givenName.' '.$nr->familyName }}<br>
            <a class="btn btn-primary" href="/underConstruction">Process</a></p>
    @endforeach
            </div>
    <h4>Reviews overdue [{{ count($reviewOverdue) }}]
        <button class="btn" type="button" data-toggle="collapse" data-target="#reviewOverdue"
                aria-expanded="false" aria-controls="reviewOverdue">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i></h4>
    <div  class="collapse" id="reviewOverdue">
        @foreach($reviewOverdue as $ro)
            <p>Volume: {{ $ro->vol }}, Paper: {{ $ro->pap }}<br>
                Title: {{ $ro->paperTitle }}<br>
                Authors: {{ $ro->authors }}<br>
                Reviewer: {{ $ro->title.' '.$ro->givenName.' '.$ro->familyName }}<br>
                <a class="btn btn-primary" href="/underConstruction">Process</a></p>
        @endforeach
    </div>

    @endsection
