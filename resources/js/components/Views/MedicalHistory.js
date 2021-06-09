import React from 'react';

import {
    Container,

    PacientInfoArea,
    PacientInfo,
    PacientInfoName,
    DataNascimentoInfo,
    MedicoResponsaveInfo,
    SexoInfo,
    IdadeInfo,
    TipoSangueInfo,

    PacientDiagnoseArea,
    DiagnoseInfo,
    Imunizacao,
    Alergias,
    Medicamentos,
    Tratamentos,
    Exames,   
} from './medicalStyles';

function MedicalHistory() {
    return (
        <Container>
            <PacientInfoArea>
                <PacientInfo>
                    <PacientInfoName></PacientInfoName>
                    <DataNascimentoInfo></DataNascimentoInfo>
                    <MedicoResponsaveInfo></MedicoResponsaveInfo>
                    <SexoInfo></SexoInfo>
                    <IdadeInfo></IdadeInfo>
                    <TipoSangueInfo></TipoSangueInfo>
                </PacientInfo>
            </PacientInfoArea>

            <PacientDiagnoseArea>
                <DiagnoseInfo>
                    <Imunizacao></Imunizacao>
                    <Alergias></Alergias>
                    <Medicamentos></Medicamentos>
                    <Diagnosticos></Diagnosticos>
                    <Tratamentos></Tratamentos>
                    <Exames></Exames>
                </DiagnoseInfo>
            </PacientDiagnoseArea>
        </Container>
    );
}

export default MedicalHistory;