const getDefaultState = () => {
    return {
        instructions: [
            {
                id: "SI-2022-0002",
                link: "-",
                type: "SI",
                vendor: "Amarit & Associates Co Ltd",
                attention: "Rigsite Transportation",
                quotation: "MITME-AGL-001",
                invoice: ['Invoice1', 'Invoice2', 'Invoice3'],
                customerPo: "PO003",
                status: "Completed"
            },
            {
                id: "SI-2022-0001 R01",
                link: "INSP-2020-0001",
                type: "SI",
                vendor: "Amarit & Associates Co Ltd",
                attention: "Rigprep Transportation from Agility Kizad",
                quotation: "MITME-AGL-001",
                invoice: ['Invoice1'],
                customerPo: "PO01",
                status: "Canceled"
            },
            {
                id: "SI-2021-0116 R01",
                link: "-",
                type: "SI",
                vendor: "ALMANSOORI INSPECTION SERVICE COMPANY LLC",
                attention: "ALMANSOORI INSPECTION SERVICE COMPANY LLC",
                quotation: "MITME-AGL-001 (Appendix 1)",
                invoice: ['Invoice1', 'Invoice2'],
                customerPo: "",
                status: "Completed"
            },
        ]
    };
};

const default_state = getDefaultState();
export {default_state};