@extends('layouts.general_layout')

@section('title', 'A. Process')

@section('content')

<p>Welcome to the Process</p>

<form action="proceed_to_risk_assessment" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Process Name:</label>
            <input class="form-control">
        </div>
        <div class="form-group">
            <label>Data Subject:</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Data Fields:</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Purpose/s for Processing:</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Security Measure/s:</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Process Narrative: </label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="card-body">
        <table>
            <tr>
                <th colspan="2" class="text-center">Process-level Analysis: Data Lifecycle</th>
            </tr>
            <tr>
                <th colspan="2" class="text-center">Data Collection</th>
            </tr>
            <tr>
                <td>Data Source:</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Collection Method:</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Timing of Collection:</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <th colspan="2" class="text-center">Data Use</th>
            </tr>
            <tr>
                <td>Is the data being used as is, or does it undergo further processing? </td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Is there automated decision-making? </td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <th colspan="2" class="text-center">Data Disclosure</th>
            </tr>
            <tr>
                <td>Is data being transferred to third parties?</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Third-party recipients</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Purpose/s of the transfer to the third party?</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Is the data transfer supported by a data sharing agreement or a data outsourcing agreement?</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Is the personal data transferred outside of the Philippines? If so, where? </td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>

            <tr>
                <th colspan="2" class="text-center">Data Storage or Disposal</th>
            </tr>
            <tr>
                <td>Retention period</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Location of data/how stored</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Is personal data being destroyed?</td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
        </table>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@stop
